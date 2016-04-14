<?php
    include 'core/ee-config.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Mapping Project</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo EE_DIR; ?>assets/css/style.css">
    <link rel="shortcut icon" href="<?php echo EE_DIR; ?>favicon1.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo EE_DIR; ?>favicon1.ico" type="image/x-icon">
  </head>
  <body>
    <div id="sidebar">
        <div id="header">
            <ul id="nav">
                <li class="nav-item"><a href="#"><i class="fa fa-home fa-2x fa-white" aria-hidden="true"></i></a></li>
                <li id="logo"><a href="#"><img src="<?php echo EE_DIR; ?>assets/images/logo.png"></a></li>
                <li class="nav-item"><a href="#"><i class="fa fa-cogs fa-2x fa-white" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <div id="map-container">
        <div id="map-controls"><input id="pac-input" class="controls" type="text" placeholder="Enter your start address"></div>
        <div id="map"></div>
    </div>
    <script src="<?php echo EE_DIR; ?>map.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=<?php echo API_KEY; ?>&callback=initialize" async defer></script>
     <!--<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY; ?>&libraries=places"></script>-->
  </body>
</html>