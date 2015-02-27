New project 
====================

### Design
- download design files
- assess design file
- check design fonts for desktop
- confirm you can get fonts online
- create style guide from design

### Server setup
- general development is done locally. loc.v1.domainname.com
- mc-dev environment for mc-review is created on metacakeclients.com as a subdomain. domain.dev.metacakeclients.com
- mc-stage environment for client-review is created on one of two locations. If available use stage.domainname.com or use domain.stage.metacakeclients.com
- production environment is domainname.com

### Development environment
- create development folder
- create starting wp-installation from mc-default-installation
- create repository in beanstalk
- download new repository from beanstalk into wp-content/themes/
- copy MCChildTheme files into repository folder
- update theme style.css with new theme name
- update theme change-log.md with clean log
- commit theme before development with init commit
- pre-compilers are used for scss. Codekit is currently in use to make set up easily replicable, but it is not mandatory. Any scss processor will do fine.
- pre-compilers are used for js when applicable. Codekit is also used, but is not mandatory.

### Theme construction
- set all default css that is possible from style guide
- build default single-page
- build default single-post
- build default archive
- create folder named "static" with in the theme
- build all design files in static page templates with in the static folder
- convert static to custom
- use advanced custom fields for options, page templates or any custom field usage. There is a pro-account installed with mc-default-installation