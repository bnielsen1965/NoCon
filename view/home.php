<div>
    
    <h2>NoCon Framework</h2>
    When a fully featured PHP framework is too much but static HTML isn't enough.<br>
    NoCon is a simple view based framework that still provides popular features common in dynamic websites without the heavy learning curve.<br>
    
    <ul>
        <li>Pretty URLs for better appearance and SEO.</li>
        <li>Dynamic view loading, does not require route configurations.</li>
        <li>Structured directories to separate assets by type and purpose.</li>
        <li>Class autoloader to simplify object usage.</li>
        <li>Namespace usage to protect against class collision.</li>
    </ul>
    
    You are viewing the default home page view for the NoCon PHP framework. You 
    will want to replace this view with your own home view or change the default 
    to some other view name.<br>
    
    <br>
    
    <h2>View Based Routing</h2>
    Each page URL specifies a view within the URL itself and the name of the view correlates with a 
    view script of the same name. As an example, the URL www.mysite.org/home specifies the 
    view as "home".<br>
    
    <br>
    
    The "home" view will be associated with the file /public_html/view/home.php. Note how
    the name of the PHP script file matches the view name. If you want to create a new view 
    named "comments" for the URL www.mysite.org/comments you only need to create a file
    named /public_html/view/comments.php and the route will automatically work.<br>
    
    <br>
    
    <h2>View Layout</h2>
    The loading of each view is initiated by a page layout. The framework includes a default 
    layout which loads additional view components such as headers, navigation bar, footer, etc.<br>
    
    <br>
    
    The layout makes it possible to reuse view components across various views. Thus 
    simplifying the process of maintaining page elements that are common across all views 
    such as a navigation bar or menu.<br>
    
    <br>
    
    The default layout can be modified or replaced, or layouts can be created for specific 
    views by saving a php script with a filename that matches the view name in the 
    public_html/layout/viewlayout/ directory.<br>
    
    <br>
    
    The Process Sequence below outlines the layout process and the relationship with the 
    framework router and the views.<br>
    
    <br>
    
    <h2>Preprocessing</h2>
    Some views may require processing before the layout or view is processed. I.E. a login 
    form or API request. View specific preprocess scripts with a filename that matches a 
    view name should be stored in /public_html/preprocess/viewprocess/ folder.<br>
    
    <br>
    
    A view preprocess script will be executed before the layout or view. This makes it possible 
    to process information submitted with the request before displaying a view and modify the 
    response. I.E. a form from a login view may post back to the login view URL. But the 
    preprocess script named login.php would check for authentication success and perform a 
    redirect to a secure view before displaying the login view again.<br>
    
    <br>
    
    <h2>Process Sequence</h2>
    The preprocess script, layout script, and views that will be loaded for a request are all determined by the URL 
    for the request and the existence of the associated files in the application directories. The following is a 
    simplified sequence diagram showing the general flow of a page request.<br>
    <ol>
        <li>The index.php script will bootstrap the configuration, autoloader, etc.</li>
        <li>After bootstrap the Router loadView() method is called to start processing the request.</li>
        <li>The loadView() method includes any needed preprocess scripts then includes the page layout.</li>
        <li>
            The page layout script calls the Router includeView() method for each view component in the layout.
            <ol type="a"><li>Note how a view may also call the Router includeView() method to load anther view component.</li></ol>
        </li>
    </ol>
    
    <img src="<?php echo \NoCon\Framework\Router::$ARGS['IMG_URL']; ?>sequence.png" />
    <br>
    
    <br>
    
    <h2>URL Structure</h2>
    The URLs take the form of {domain}/{path}/{view}/{parameter}/{parameter}/...<br>
    I.E. http://www.mydomain.com/myapp/articles/1/<br>
    In this example the site domain is www.mydomain.com, the application is installed
    in the myapp path, and the articles view is requested with an extra parameter of 1
    that may be a pagination value for the articles displayed in the view.<br>
    
    <br>
    
    <h2>Framework Router</h2>
    The framework Router class provides a set of methods that can be used in a preprocess 
    script, layout, or view to access parameters passed in the URL or to store arguments 
    that will be shared across views. (Each view component, layout, and preprocess script do not 
    share a variable scope. The Router class includes a static $ARGS property that can be 
    used to store values that need to be shared.)<br>
    
    <br>
    
    <h2>Class Autoloader</h2>
    The framework includes a class autoloader that will check in the framework class path
    for any unloaded class files. The name of the class file must match the name of
    the class to be loaded and the class directory structure must match the namespace of
    of the class. I.E. if we have a line that says $db = new \Comments\Database();
    then the autoloader will check in the class path for the class file Comments/Database.php.<br>
    
    <br>
    
    <h2>Current Settings</h2>
    <table border="1">
        <tr><th>Setting</th><th>Value</th></tr>
        <tr><th>title</th><td><?php echo NoCon\Framework\Config::get('application', 'title'); ?></td></tr>
        <tr><th>defaultView</th><td><?php echo NoCon\Framework\Config::get('application', 'defaultView'); ?></td></tr>
        <tr><th>sessionName</th><td><?php echo NoCon\Framework\Config::get('application', 'sessionName'); ?></td></tr>
        <tr><th>urlDomain</th><td><?php echo NoCon\Framework\Config::get('framework', 'urlDomain'); ?></td></tr>
        <tr><th>urlPath</th><td><?php echo NoCon\Framework\Config::get('framework', 'urlPath'); ?></td></tr>
        <tr><th>siteURL</th><td><?php echo NoCon\Framework\Config::get('framework', 'siteURL'); ?></td></tr>
        <tr><th>cssURL</th><td><?php echo NoCon\Framework\Config::get('framework', 'cssURL'); ?></td></tr>
        <tr><th>imageURL</th><td><?php echo NoCon\Framework\Config::get('framework', 'imageURL'); ?></td></tr>
        <tr><th>sitePath</th><td><?php echo NoCon\Framework\Config::get('framework', 'sitePath'); ?></td></tr>
        <tr><th>viewPath</th><td><?php echo NoCon\Framework\Config::get('framework', 'viewPath'); ?></td></tr>
        <tr><th>includePath</th><td><?php echo NoCon\Framework\Config::get('framework', 'includePath'); ?></td></tr>
        <tr><th>classPath</th><td><?php echo NoCon\Framework\Config::get('framework', 'classPath'); ?></td></tr>
        <tr><th>cachePath</th><td><?php echo NoCon\Framework\Config::get('framework', 'cachePath'); ?></td></tr>
    </table>
    
    <br>
    
</div>
