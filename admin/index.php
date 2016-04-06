<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Admin Panel</a>
            </div>
            <div class="alertarea">
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Events
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                 <div class="col-xs-1">
                                     <form method="post" id="newevent" action="/includes/insert.php">
                                          <div class="form-group">
                                            <label for="eventidInput">EventID</label>
                                            <input type="text" class="form-control" id="eventidInput" name="eventidInput" placeholder="000000">
                                          </div>
                                          <div class="form-group">
                                            <label for="owneridInput">OwnerID</label>
                                            <input type="text" class="form-control" id="owneridInput" name="owneridInput" placeholder="1" disabled>
                                          </div>
                                     </div>
                                    <div class="col-xs-3">
                                          <div class="form-group">
                                            <label for="nameInput">Location Name*</label>
                                            <input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="North Lambton">
                                          </div>
                                          <div class="form-group">
                                            <label for="descInput">Description</label>
                                            <input type="text" class="form-control" id="descInput" name="descInput" placeholder="BasketBall">
                                          </div>
                                     </div>
                                    <div class="col-xs-1">
                                          <div class="form-group">
                                            <label for="typeInput">Type</label>
                                            <select class="form-control" name="typeInput" id="typeInput">
                                                <option>Select</option>
                                                <option>Sport</option>
                                                <option>Art</option>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="agesInput">Ages</label>
                                            <input type="text" class="form-control" id="agesInput" name="agesInput" placeholder="10-12">
                                          </div>
                                     </div>
                                    <div class="col-xs-2">
                                          <div class="form-group">
                                            <label for="latInput">Latitude</label>
                                            <input type="text" class="form-control" id="latInput" name="latInput" placeholder="Latitude">
                                          </div>
                                          <div class="form-group">
                                            <label for="lngInput">Longitude</label>
                                            <input type="text" class="form-control" id="lngInput" name="lngInput" placeholder="Longitude">
                                          </div>
                                     </div>
                                    <div class="col-xs-1">
                                          <div class="form-group">
                                            <label for="starttimeInput">Start Time</label>
                                            <input type="text" class="form-control timepicker" id="starttimeInput" name="starttimeInput" placeholder="HH:MM:SS">
                                          </div>
                                          <div class="form-group">
                                            <label for="endtimeInput">End Time</label>
                                            <input type="text" class="form-control timepicker" id="endtimeInput" name="endtimeInput" placeholder="HH:MM:SS">
                                          </div>
                                     </div>
                                    <div class="col-xs-2">
                                          <div class="form-group">
                                            <label for="startdateInput">Start Date</label>
                                            <input type="text" class="form-control datepicker" id="startdateInput" name="startdateInput" placeholder="YYYY-MM-DD">
                                          </div>
                                          <div class="form-group">
                                            <label for="enddateInput">End Date</label>
                                            <input type="text" class="form-control datepicker" id="enddateInput" name="enddateInput" placeholder="YYYY-MM-DD">
                                          </div>
                                     </div>
                                    <div class="col-xs-2">
                                          <div class="form-group">
                                            <label for="dayInput">Day</label>
                                            <select class="form-control" id="dayInput" name="dayInput">
                                                <option>Select</option>
                                                <option>Monday</option>
                                                <option>Tuesday</option>
                                                <option>Wednesday</option>
                                                <option>Thursday</option>
                                                <option>Friday</option>
                                                <option>Saturday</option>
                                                <option>Sunday</option>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="enddateInput">&nbsp;</label><br>
                                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                        </form>
                                        <button class="btn btn-info" name="">+</button>
                                      </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View/Edit Events
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>EventID</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Ages</th>
                                            <th>Times</th>
                                            <th>Dates (Start | End)</th>
                                            <th>Day of the Week</th>
                                        </tr>
                                    </thead>
                                    <tbody id="events">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/js/jquery-1.12.0.min.js"></script>
    <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/collapse.js"></script>
    <script src="/assets/js/moment.min.js"></script>
    <script src="/assets/js/dataTables.bootstrap.min.js"></script>
    <script src="/assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/assets/js/ajax.js"></script>
    <script type="text/javascript">
            $(function () {
                $('.datepicker').datetimepicker({
                        format: 'YYYY-MM-DD',
                        showClose: true
                });
                $('.timepicker').datetimepicker({
                        format: 'h:mm:00',
                        showClose: true
                });
            });
            $("#events").load("/includes/edit.php");
    </script>
</body>
</html>
