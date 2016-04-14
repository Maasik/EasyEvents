<?php
    include 'core/ee-config.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Mapping Project</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo EE_DIR; ?>assets/css/style.css">
  </head>
  <body>
    <div id="sidebar">
        <div id="header">
            <div id="logo"><img src="<?php echo EE_DIR; ?>assets/images/logo.png"></div>
        </div>
    </div>
    <div id="map"></div>
      <script src="<?php echo EE_DIR; ?>map.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=<?php echo API_KEY; ?>&callback=initialize" async defer></script>
  </body>
</html>