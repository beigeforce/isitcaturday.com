# ISITCATURDAY.COM #

## Website ##

https://isitcaturday.com

## Description ##

This repository is primarily to allow contribution towards the random text which is generated on the site, depending on whether it is Caturday or not. Edit the text files below to make changes to that text. Other contributions are welcome.

### Caturday Text ###

includes/txt/izCaturday.txt

### Non-Caturday Text ###

includes/txt/izNotCaturday.txt

## Implementation ##

To maximize the speed of the site and optimize server performance, all includes are server-side and the client should only need to access the index.php file. Most browsers will of course look for other files (such as a favicon etc) but nothing can be done to prevent this. 

## Credit ##

Code is generate by hailthemelody, with usage of the Cat API http://thecatapi.com/ for images/video.

## .htaccess ##

To protect the production site from having git- and server-side-related files visible, create an ".htaccess" file at the root of the production environment and populate with the below code. Blocking server-side-related files is not required, but it helps keeps things clean and tidy on the public-facing site.

### /.htaccess (on production site) ###
```apacheconf
# deny access to git- and server-side-related files:
RedirectMatch 404 ^/.git/.*$
RedirectMatch 404 ^/includes/.*$
RedirectMatch 404 ^/README.md$
```

## TODO ##

* generate favicon which is a question mark using the texture of a cat's tail
* default to static images for mobile viewports, retaining 'video' for desktops