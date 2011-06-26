This file outlines the steps necessary to prepare your site/theme to go live

1.) If you are moving a development theme from a local environment to a live server:
 - Change siteurl in wp_options database table to new domain
 - Change home in wp_options database table to new domain
 - Double check all links to make sure they point to new domain

2a.) If running Apache, move the entire htaccess file to /.htaccess

2b.) If running Nginx:
 - move nginx.conf to /etc/nginx/ on your server (or wherever your server config files reside)
 - move default.sites-available to /etc/nginx/sites-available/default on your server (or wherever your server config files reside)

3.) move robots.txt to /
 - This is an example robots structure using best practices outlined by Jeff Starr
 - http://perishablepress.com/wordpress-robots-rules/

