<div>
    
    <h2>NoCon Framework</h2>
    When a fully featured MVC PHP framework is just too much but static HTML
    just isn't enough, NoCon.<br>
    
    <br>
    
    The NoCon framework still provides the framework needed for a dynamic website 
    with clean SEO friendly URLs and a structured PHP application framework with 
    views but without the extreme complexity and learning curve that comes with a 
    fully featured MVC framework.<br>
    
    <br>
    
    <h2>Preprocessing</h2>
    Add your PHP code to <?php echo INCLUDES_PATH; ?>preprocess.php for any
    processing that needs to occur prior t loading of the page views, i.e. form
    processing, URL redirection, AJAX output, etc.<br>
    
    <br>
    
    <h2>Layout</h2>
    Not happy with the default view layout, edit <?php echo INCLUDES_PATH; ?>layout.php
    to change the sequence of view loading for the page layout.<br>
    
    <br>
    
    The default layout will load views in the following sequence...<br>
    <?php echo VIEWS_PATH; ?>header.php<br>
    <?php echo VIEWS_PATH; ?>nav.php<br>
    <?php echo VIEWS_PATH; ?>{view name from URL or default}.php<br>
    <?php echo VIEWS_PATH; ?>footer.php<br>
    
    <br>
    
    You are viewing the default home page view for the NoCon PHP framework. You 
    will want to replace this view with your own home view or change the default 
    to some other view name.<br>
    
    <br>
    
    <h2>Navigation</h2>
    The default site navigation is defined in <?php echo VIEWS_PATH; ?>nav.php.
    This view file can be modified to add new links to page views added to the
    views path.<br>
    
    <br>
    
    <h2>Views</h2>
    Adding new pages to a site is as simple as adding a new PHP view file in the
    views path and adding a link to the page. As an example assume we want an
    About view to provide some information about the site. First we create the 
    file <?php echo VIEWS_PATH; ?>about.php with the about details. Next we would 
    likely want to edit the nav.php view to add a link to our About page using some 
    code like the following...<br>
    
    &lt;a href="about"&gt;[About]&lt;/a&gt;<br>
    
    <br>
    
    <h2>Constants</h2>
    DEFAULT_TITLE: <?php echo DEFAULT_TITLE; ?><br>
    DEFAULT_VIEW: <?php echo DEFAULT_VIEW; ?><br>
    SESSION_NAME: <?php echo SESSION_NAME; ?><br>
    
    <br>
    
    URL_DOMAIN: <?php echo URL_DOMAIN; ?><br>
    URL_PATH: <?php echo URL_PATH; ?><br>
    
    <br>
    
    SITE_URL: <?php echo SITE_URL; ?><br>
    CSS_URL: <?php echo CSS_URL; ?><br>
    IMAGES_URL: <?php echo IMAGES_URL; ?><br>
    
    <br>
    
    SITE_PATH: <?php echo SITE_PATH; ?><br>
    VIEWS_PATH: <?php echo VIEWS_PATH; ?><br>
    INCLUDES_PATH: <?php echo INCLUDES_PATH; ?><br>
    CLASSES_PATH: <?php echo CLASSES_PATH; ?><br>
    CACHE_PATH: <?php echo CACHE_PATH; ?><br>
    
</div>
