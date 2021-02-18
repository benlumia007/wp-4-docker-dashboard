<?php
/**
 * Benjlu ( functions.php )
 *
 * @package   Benjlu
 * @copyright Copyright (C) 2021. Benjamin Lu
 * @license   GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */

require_once( 'vendor/autoload.php' );

define( 'DASHBOARD_DIR', __DIR__ );

$dashboard = new Benlumia007\Alembic\Core\Framework();

$config = require_once( 'app/functions-config.php' );

$dashboard->instance( 'path', DASHBOARD_DIR );
$dashboard->instance( 'uri', $config['uri'] );
$dashboard->instance( 'uri/relative', parse_url( $dashboard->uri, PHP_URL_PATH ) );
$dashboard->instance( 'routes', new Benlumia007\Alembic\Routing\Routes() );
$dashboard->singleton( 'cache', function() { return new Benlumia007\Alembic\Tools\Collection(); } );
$dashboard->instance( 'config/entry', require_once( $dashboard->path . '/app/functions-entry.php' ) );
$dashboard->instance( 'path/content', 'user/content' );
$dashboard->singleton( 'template/engine', Benlumia007\Alembic\Template\Engine\Engine::class );
$dashboard->singleton( 'content/types', function() { return new Benlumia007\Alembic\Entry\Types(); } );
$dashboard->instance( 'cache/meta', [ 'date', 'category', 'slug' ] );
$dashboard->singleton( 'mix', function( $app ) { $file = "{$app->path}/public/mix-manifest.json"; return file_exists( $file ) ? json_decode( file_get_contents( $file ), true ) : null; } );
$dashboard->singleton( 'request', Benlumia007\Alembic\Http\Request::class );
$dashboard->singleton( 'yaml', Benlumia007\Alembic\Tools\Yaml::class );
$dashboard->proxy( Benlumia007\Alembic\Proxies\Engine::class, 'Benlumia007\Alembic\Engine' );
$dashboard->proxy( Benlumia007\Alembic\Proxies\ContentTypes::class, 'Benlumia007\Alembic\ContentTypes' );
$dashboard->boot();

Benlumia007\Alembic\ContentTypes::add( 'page', new Benlumia007\Alembic\Entry\Types\Page( $dashboard->routes ) );
Benlumia007\Alembic\ContentTypes::registerRoutes();
$dashboard->routes->get( '/', Benlumia007\Alembic\Controllers\Home::class );

if ( isset( $_GET['bust-cache'] ) ) {

	if ( 'all' === $_GET['bust-cache'] ) {

		$files = glob( $dashboard->resolve( 'path' ) . "/user/cache/content/*.json" );

		foreach ( $files as $filename ) {
			unlink( $filename );
		}
	} else {
		$path = $dashboard->resolve( 'path' ) . '/user/cache';

		$name = preg_replace( '/[^A-Za-z0-9\/_-]/i', '', $_GET['bust-cache'] );

		if ( file_exists( "{$path}/{$name}.json" ) ) {
			unlink( "{$path}/{$name}.json" );
		}
	}
}

// Check if ob_gzhandler already loaded
if ( ini_get( 'output_handler' ) !== 'ob_gzhandler' ) {
	if ( extension_loaded( 'zlib' ) ) {
		if ( ! ob_start( 'ob_gzhandler' ) ) {
			ob_start();
		}
	}
}

// Launch the current controller.
$current = $dashboard->routes->current();