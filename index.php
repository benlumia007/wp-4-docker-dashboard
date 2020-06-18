<?php
/**
 * Dashboard ( index.php )
 *
 * @package		Dashboard
 * @copyright	Copyright (C) 2019. Benjamin Lu
 * @license		GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author		Benjamin Lu ( https://benjlu.com )
 */
require '../functions.php';
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<link href="../framework/assets/css/style.css" rel="stylesheet" type="text/css" />
		<link href="../framework/assets/fonts/custom-fonts.css" rel="stylesheet" type="text/css" />
	</head>
<body>
<div id="container" class="site-container">
	<header id="header" class="site-header">
		<div class="branding-navigation">
			<div class="site-branding">
				<h1 class="site-title"><a href="https://dashboard.test">WP 4 Docker</a></h1>
				<h3 class="site-description">WordPress Development</h3>
			</div>
			<div class="primary-navigation">
				<ul>
					<li><a href="https://dashboard.test/sites">Sites</a></li>
                    <li><a href="https://dashboard.test/phpmyadmin" target="_blank">phpMyAdmin</a></li>
                    <li><a href="http://dashboard.test:8025" target="_blank">MailHog</a></li>
                    <li><a href="https://dashboard.test/phpinfo" target="_blank">PHPInfo</a></li>
                    <li><a href="https://dashboard.test/support">Support</a></li>
				</ul>
			</div>
		</div>
	</header>
	<section id="content" class="site-content">
		<section class="content-area">
			<header class="entry-header">
				<h1 class="entry-title">Sites</h1>
			</header>
            <div class="box">
				<?php sites(); ?>
            </div>
		</section>
	</section>
	<footer id="footer" class="site-footer">
		<div class="site-info">
			Copyright (C) 2019-2020. All Rights Reserved
		</div>
	</footer>
</div>
</body>
</html>
