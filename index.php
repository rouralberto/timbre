<?php $noCache = '?timestamp=' . date('U'); ?>
<html lang="en">
<head>
    <title>Timbre</title>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link rel="shortcut icon" href="assets/img/icon-web.png">
    <link rel="icon" type="image/png" href="assets/img/icon-web.png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/icon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles.css<?php echo $noCache; ?>">

    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/tracking/build/tracking-min.js"></script>
    <script type="text/javascript" src="node_modules/tracking/build/data/face-min.js"></script>
    <script type="text/javascript" src="assets/js/timbre.js<?php echo $noCache; ?>"></script>
</head>
<body>

<header id="header">
    Header goes here
</header>

<main id="main">
    <video id="video" width="320" height="240" preload autoplay loop muted></video>
    <canvas id="canvas" width="320" height="240"></canvas>
</main>

</body>
</html>
