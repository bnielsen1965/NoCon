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

The default layout script can be modified or replaced to change the standard 
layout of all views or layouts can be created for specific views and saved in 
the layout/viewlayout/ path.

If a view needs to process a form submission prior to loading the layout and view 
then a preprocess script with the same filename as the view can be stored in the 
preprocess/viewprocess/ folder. This preprocess is executed prior to the layout 
and view so it can be used to redirect for login forms or generate JSON or XML 
output for an API call and then call the \Framework\Router::disableView() 
method to prevent any further output.

---------------------------------


# EXAMPLES

The easiest way to learn how to use the framework is to install an example and 
start editing code. The framework itself is a working example with a single 
route for the Home view.

You can also check out a more elaborate example complete with a built in API 
route in the [NoCon OpenSSL Test Example](http://getwebscripts.com/demos/ssltest/).

The NoCon OpenSSL Test Example can be [downloaded as a zip file](http://getwebscripts.com/downloads/ssltest.zip).

