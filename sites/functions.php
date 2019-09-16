<?php
/**
 * Dashboard ( functions.php )
 *
 * @package		Dashboard
 * @copyright	Copyright (C) 2019. Benjamin Lu
 * @license		GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author		Benjamin Lu ( https://benjlu.com )
 */

 require_once 'yaml.php';

function sites() {
    $yaml = new Alchemy\Component\Yaml\Yaml();
    $data = $yaml->load( ( file_exists( '/var/www/html/dashboard/public_html/config/docker-custom.yml' ) ) ? '/var/www/html/dashboard/public_html/config/docker-custom.yml' : '' );
    foreach ($data['sites'] as $name => $site ) { ?>
        <div class="entry-content"> 
            <?php
            $provision = $site['provision'];

            if ( $provision == 1 ) { ?>
                <h2 class="site-name"><?php echo strip_tags( $name ); ?></h2> 
                <?php foreach ( $site['host'] as $host ) { ?>
                    <a class="link" href="<?php echo 'https://'.$host; ?>" target="_blank"><?php echo 'https://'.$host; ?></a>
                <?php }
            } ?>
        </div>
        <?php
    }
}