This file outlines the steps that need to be taken to prepare this site/theme to go live

WordPress Database:
1.) Change siteurl in wp_options table to new domain
2.) Change home in wp_options table to new domain

WordPress Theme:
1.) Move .htaccess to / and paste in 5GFirewall.txt rules
2.) Move any favicon.ico to library/images/
3.) Update Google Custom Search info on site and on Google to reflect new domain
4.) Double check all links to make sure they point to new domain
5.) Move robots.txt to /
6.) Create sitemap.xml in /
7.) 
