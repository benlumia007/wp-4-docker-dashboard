<?php
/**
 * Dashboard ( index.php )
 *
 * @package		Dashboard
 * @copyright	Copyright (C) 2019. Benjamin Lu
 * @license		GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author		Benjamin Lu ( https://benjlu.com )
 */

function endsWith( $haystack, $needle ) {
    $length = strlen( $needle );
    return $length === 0 ||
    ( substr( $haystack, -$length ) === $needle );
}

function sites() {
    $yaml = new Alchemy\Component\Yaml\Yaml();
    $data = $yaml->load( ( file_exists( 'config/docker-custom.yml' ) ) ? 'config/docker-custom.yml' : 'templates/docker-setup.yml' );
}
