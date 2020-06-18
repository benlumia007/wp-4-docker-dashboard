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
            <section class="entry-content">
                <p>Welcome, you have sucessfully installed WP 4 Docker, a WordPress development environment. You now have full access to all available features
                that are included in this environment.</p>
                <p>WP 4 Docker is an open source project that can be used with latest version of WSL2 for Windows 10 Home, Linux and macOS.</p>
                <p>Also of course, you will need Docker for Linux if you are using Ubuntu or Elementary OS and if you are using a Mac, then you should at least have
                Docker for Mac. Apparently again, Docker for Windows may not work without automation.</p>
                <h1>How it works</h1>
                <p>When you first clone or download the project for the first time, it will generate all necessary configurations needed in the initial stage. this
                will generate a dashboard that you can access with sites, phpMyAdmin, MailHog,docs and support.</p>
                <p>All you will need to do is type <code>make</code>, it will generate a config files for dashboard, certificates and downloads all of the resources
                needed. After you have successfully done so, you can use <code>docker-compose up -d</code> or <code>make docker-server</code> to start the containers.
                These containers are nginx, mysql, phpfpm, and mailhog. phpMyAdmin is already been set as part of the dashboard.</p>
                <p>The certificates are required to be install, you will just need the ca.crt install to able to access the dashboard and the rest of the resources that
                comes with.</p>
                <h1>Your First Site</h1>
                <p>In the docker-compose.yml file inside of the config folder, this is where you want to setup your sites at, yes, i said sites, you can actually create
                multiple sites if you wish to do so. Currently, by default, there is a sandbox that has been pre-defined and provision is set to false. When you set it to
                true, and enter <code>make</code>, this will then generated the configs, certs and other stuff that needed for sandbox to work. This also includes adding
                the domain to the hosts file automatically. After it finishes, you can do a <code>docker-compose restart</code> which restarts all containers or a <code>make docker-server</code>
                which also tells container to restart.<p>
            </section>
        </section>
    </div>
    <footer id="footer" class="site-footer">
        <div class="site-info">
            Copyright (C) 2019-2020. All Rights Reserved
        </div>
    </footer>
</div>
</body>
</html>
