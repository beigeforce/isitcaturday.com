# ISITCATURDAY.COM #

## Website ##

https://isitcaturday.com

## Description ##

This repository is primarily to allow contribution towards the random text which is generated on the site, depending on whether it is Caturday or not. Edit the text files below to make changes to that text. Other contributions are welcome.

### Caturday Text ###

```
/includes/txt/izCaturday.txt
```

### Non-Caturday Text ###

```
/includes/txt/izNotCaturday.txt
```

## Implementation ##

To maximize the speed of the site and optimize server network performance, all includes are server-side and the client should only need to access the index.php file. Most browsers will of course look for other files (such as a favicon etc) but nothing can be done to prevent this. 

Since the day of the week (ie - it being Caturday or not) is determined client-side in order to acccount for timezones, both Caturday and non-Caturday text are determined by the server on each pageserve, and chosen by the client via javascript. In the event that javascript is disabled, the text 'maybe!' is displayed to the client.

To further optimize the speed of the site and minimize file downloads by the client, jquery is intentionally *not* used.

## .htaccess ##

To protect the production site from having git- and server-side-related files visible, the following ".htaccess" file is used at the root of the production environment, populated with the below code. Blocking server-side-related files is not required, but it helps keeps things clean and tidy on the public-facing site. Just like a cat.

```apacheconf
# custom 404
RewriteEngine On
ErrorDocument 404 /404.php
# deny access to git- and server-side-related files:
RedirectMatch 404 ^/.git/.*$
RedirectMatch 404 ^/includes/.*$
RedirectMatch 404 ^/README.md$
```

## TODO ##

* generate favicon which is a question mark using the texture of a cat's tail
* ~~redirect 404's to index page~~
* ~~default to static images for mobile viewports, retaining 'video' for desktops~~
* Make Caturday text giant using jquery.fittext.js and slightly pulsate so that jpg/gif beneath is visible

## Credit ##

Code was created by hailthemelody, with usage of the Cat API http://thecatapi.com/ for images/video.
