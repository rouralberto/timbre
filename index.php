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

    <link rel="stylesheet" href="node_modules/tracking/examples/assets/demo.css">
    <style>
        video, canvas {
            margin-left: 230px;
            margin-top: 120px;
            position: absolute;
        }
    </style>

    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/tracking/build/tracking-min.js"></script>
    <script type="text/javascript" src="node_modules/tracking/build/data/face-min.js"></script>
    <script type="text/javascript" src="node_modules/tracking/examples/assets/stats.min.js"></script>
    <script type="text/javascript" src="js/timbre.js<?php echo $noCache; ?>"></script>
</head>
<body>

<div class="demo-frame">
    <div class="demo-container">
        <video id="video" width="320" height="240" preload autoplay loop muted></video>
        <canvas id="canvas" width="320" height="240"></canvas>
    </div>
</div>

</body>
</html>
