<?php

// if no page title then set to default
if (empty($pageTitle)) {
    $pageTitle = DEFAULT_TITLE;
}

?>
<!DOCTYPE html>
<html>
<head>

<title><?php echo $pageTitle; ?></title>

<link rel="shortcut icon" href="<?php echo SITE_URL; ?>favicon.ico" />
<meta charset="UTF-8">

<link href="<?php echo CSS_URL; ?>styles.css" rel="stylesheet">

</head>
<body>

    <!-- header start -->
    <div>
        <h1>NoCon Header</h1>
    </div>
    <!-- header end -->
