<?php

function site_title() {
	$data = Benlumia007\Alembic\Config\File::get_instance()->get_data();

	$title = $data['title'];
	return strip_tags( $title );
}

function site_tagline() {
	$data = Benlumia007\Alembic\Config\File::get_instance()->get_data();
	$title = $data['tagline'];
	return strip_tags( $title );
}

function primary_navigation() {
	$data = Benlumia007\Alembic\Config\File::get_instance()->get_data();
	foreach ($data['primary'] as $name => $title ) { ?>
		<li class="menu-item"><a href="<?= e( uri( $title['url'] ) ) ?>"><?= e( $title['title'] ); ?></a></li>
	<?php }
}

function social_navigation() {
	$data = Benlumia007\Alembic\Config\File::get_instance()->get_data();
	foreach ($data['social'] as $name => $title ) { ?>
		<li class="menu-item"><a href="<?= e( $title['url'] ); ?>" target="_blank"><svg><?php include( public_path() . e( $title['svg'] ) ); ?></svg></a></li>
	<?php }
}


function sites() {
    $data = Dashboard\Config\Component\Yaml::get_instance()->get_data(); ?>
    <div class="entry-site">
    <?php foreach ($data['sites'] as $name => $site ) { ?>
        <div class="entry-content"> 
            <?php
            $provision = $site['provision'];

            if ( $provision == 1 ) { ?>
                    <h2 class="site-name"><?php echo strip_tags( $name ); ?></h2>
                    <?php foreach ( $site['host'] as $host ) { ?>
                        <a class="site-link" href="<?php echo 'https://'.$host; ?>" target="_blank"><?php echo 'https://'.$host; ?></a>
                    <?php } ?>
            <?php } ?>
        </div>
        <?php
    } ?>
    </div>
<?php }