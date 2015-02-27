<?php namespace Framework; // namespace needed to access classes ?>
<!DOCTYPE html>
<html>
<head>

<title><?php echo Router::$ARGS['PAGE_TITLE']; ?></title>

<link rel="shortcut icon" href="<?php echo Router::$ARGS['SITE_URL']; ?>favicon.ico" />
<meta charset="UTF-8">

<link href="<?php echo Router::$ARGS['CSS_URL']; ?>styles.css" rel="stylesheet">

</head>
<body>

    <!-- header start -->
    <div>
        <h1>NoCon</h1>
        This is the head subview.
    </div>
    <hr>
    <!-- header end -->

<?php Router::includeView('subview/nav');