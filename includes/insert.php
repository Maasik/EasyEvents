<?php
    include 'core/dbconnect.php';
    
    $ownerID = 1;
    $eventID = $_POST['eventidInput'];
    $name = $_POST['nameInput'];
    $type = $_POST['typeInput'];
    $description = $_POST['descInput'];
    $ages = $_POST['agesInput'];
    $lat = $_POST['latInput'];
    $lng = $_POST['lngInput'];
    $startTime = $_POST['starttimeInput'];
    $endTime = $_POST['starttimeInput'];
    $startDate = $_POST['startdateInput'];
    $endDate = $_POST['startdateInput'];
    $day = $_POST['dayInput'];
    
    if($name) {
        
        if(!$eventID) {
            $eventID = "999";
        }
        if (!$type || $type == "Select") {
            $type = "None";
        }
        if (!$description) {
            $description = "None";
        }
        if (!$lat) {
            $lat = 0;
        }
        if (!$lng) {
            $lng = 0;
        }
        if (!$startTime) {
            $startTime = '00:00:00';
        }
        if (!$endTime) {
            $endTime = '00:00:00';
        }
        if (!$startDate) {
            $startDate = '0000-00-00';
        }
        if (!$endDate) {
            $endDate = '0000-00-00';
        }
        if (!$day || $day == 'Select') {
            $day = "None";
        }
                
        $sql = "INSERT INTO events (ownerID, eventID, name, type, description,  lat, lng, timeStart, timeEnd, dateStart, dateEnd, day) VALUES ($ownerID, $eventID, '$name', '$type', '$description', $lat, $lng, '$startTime', '$endTime', '$startDate', '$endDate', '$day')";

        if ($connection->query($sql) === TRUE) {
            echo "200";
        } else {
            echo "400";
        }

        $connection->close();   
    } else {
    }

