<?php
/**
 * Dashboard ( index.php )
 *
 * @package		Dashboard
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license		GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author		Benjamin Lu ( https://benjlu.com )
 */
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link href="framework/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="framework/assets/fonts/custom-fonts.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container" class="site-container">
    <header id="header" class="site-header">
        <div class="branding-navigation">
            <div class="site-branding">
                <h1 class="site-title"><a href="https://dashboard.test">Docker for WordPress</a></h1>
                <h3 class="site-description">WordPress Development</h3>
            </div>
            <div class="primary-navigation">
                <ul>
                    <li><a href="https://dashboard.test/sites">Sites</a></li>
                    <li><a href="https://dashboard.test/phpmyadmin" target="_blank">phpMyAdmin</a></li>
                    <li><a href="http://dashboard.test:8025" target="_blank">MailHog</a></li>
                    <li><a href="https://dashboard.test/phpinfo" target="_blank">PHPInfo</a></li>
                    <li><a href="https://dashboard.test/docs">Docs</a></li>
                    <li><a href="https://dashboard.test/support">Support</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section id="content" class="site-content">
        <header class="background-image">
            <h1 class="background-title">Docker Up</h1>
            <h3 class="background-description">Linux, Nginx, MySQL, and PHP</h3>
        </header>
        <section class="content-area">
            <header class="entry-header">
                <h1 class="entry-title">Welcome to Docker for WordPress</h1>
            </header>
            <section class="entry-content">
                <p>Welcome, you have sucessfully installed Docker for WordPress, a development environment. You now have full access to all available features
                that are included in this environment. If you need help, head over to the docs to learn more.</p>
                <p>Docker for WordPress is an open source project that can be used with Linux and Docker for Mac. Currently, Docker for WordPress doesn't have
                automation, therfore, is not fully functional at the moment nor it will be.</p>
                <h1>Requirements</h1>
                <p>Docker for WordPress requires couple of things that can help speed up the automation, but please note that the automation works only with Linux
                and macOS. The following items that are require as follow.</p>
                <ul>
                    <li>shyaml for Linux and macOS</li>
                    <li>wget for macOS</li>
                </ul>
                <p>Also of course, you will need Docker for Linux if you are using Ubuntu or Elementary OS and if you are using a Mac, then you should at least have
                Docker for Mac. Apparently again, Docker for Windows may not work without automation.</p>
            </section>
        </section>
    </div>
    <footer id="footer" class="site-footer">
        <div class="site-info">
            Copyright (C) 2019. All Rights Reserved
        </div>
    </footer>
</div>
</body>
</html>