# NoCon

When a fully featured MVC PHP framework is just too much but static HTML
just isn't enough, NoCon. This is a bare bones PHP application framework that
provides SEO friendly clean URLs, a router, views, and all the dynamic 
flexibility of PHP programming without the complexity and steep learning curve
of a full featured PHP framework.

---------------------------------


# INSTALLATION

Copy the contents of the nocon folder to the web server hosting directory and
start developing views.

NOTE: Be sure to copy the .htaccess file that contains the mod_rewrite rules 
needed for the clean URLs.

---------------------------------


# DEVELOPING

Development primarily involves the creation of new view files with some editing
of the existing partial view files for the header, navigation, and the footer. 
Additional work may be needed in the preprocess.php includes file to process
any form submissions, AJAX messages, redirects, etc.

## Preprocessing
Add your PHP code to includes/preprocess.php for any 
processing that needs to occur prior t loading of the page views, i.e. form 
processing, URL redirection, AJAX output, etc.

## Layout
Not happy with the default view layout, edit 
includes/layout.php to change the sequence of view loading 
for the page layout.

The default layout will load views in the following sequence...
views/header.php
views/nav.php
views/{view name from URL or default}.php
views/footer.php

## Navigation
The default site navigation is defined in views/nav.php. 
This view file can be modified to add new links to page views added to the 
views path.

## Views
Adding new pages to a site is as simple as adding a new PHP view file in the 
views path and adding a link to the page. As an example assume we want an 
About view to provide some information about the site. First we create the 
file views/about.php with the about details. Next we would likely want to edit 
the nav.php view to add a link to our About page using some code like the 
following...
<a href="about">[About]</a>

---------------------------------


# CONSTANTS

The config.php file contains various constant definitions, some of which you
will want to change, i.e. DEFAULT_TITLE, DEFAULT_VIEW, and SESSION_NAME. While 
others are provided to assist in development of any view or preprocessing scripts.


---------------------------------
