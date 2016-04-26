<?php
    include 'core/ee-settings.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Mapping Project</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo EE_DIR; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo EE_DIR; ?>assets/css/style.css">
    <link rel="shortcut icon" href="<?php echo EE_DIR; ?>favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo EE_DIR; ?>favicon.ico" type="image/x-icon">
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
        <div class="section intro-image">
        </div>
        <div class="section intro">
            <p>Start by Selecting your Activity type</p>
        </div>
        <div class="section">
            <div class="sec-container">
                <div class="row">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Activity Type</label>
                        <div class="col-sm-8">
                             <select class="form-control" id="dayInput" name="dayInput">
                                <option>Any</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Age</label>
                        <div class="col-sm-8">
                             <select class="form-control" id="dayInput" name="dayInput">
                                <option>Any</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Sex</label>
                        <div class="col-sm-8">
                             <select class="form-control" id="dayInput" name="dayInput">
                                <option>Any</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Facility</label>
                        <div class="col-sm-8">
                             <select class="form-control" id="dayInput" name="dayInput">
                                <option>Any</option>
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Neighbourhood</label>
                        <div class="col-sm-8">
                             <select class="form-control" id="dayInput" name="dayInput">
                                <option>Any</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Day</label>
                        <div class="col-sm-8">
                             <select class="form-control" id="dayInput" name="dayInput">
                                <option>Any</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="footer">
            <div id="event-window">
                <h4 id="res">Results</h2>
                <div class="event-con">
                    <table class="eventtable wide">
                        <tr class="wide">
                            <td class="tr1 td-left event-name">Skateboarding Clinic-Level 1</td>
                            <td class="tr1 td-right event-fac">SpringBank Park</td>
                        </tr>
                        <tr>
                            <td class="tr event-image"><img src="<?php echo EE_DIR; ?>assets/images/basketball.png"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="map-container">
        <div id="map"></div>
    </div>
    <script src="<?php echo EE_DIR; ?>map.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=<?php echo API_KEY; ?>&callback=initialize" async defer></script>
  </body>
</html>