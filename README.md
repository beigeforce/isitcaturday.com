# ISITCATURDAY.COM #

To protect the production site from having git-related files visible, create and ".htaccess" file at the root of the production environment and populate with the following:

## /.htaccess (on production site) ##
```apacheconf
# deny access to git- and server-side-related files:
RedirectMatch 404 ^/.git/.*$
RedirectMatch 404 ^/includes/.*$
RedirectMatch 404 ^/README.md$
```
