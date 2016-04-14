<?php
    include 'core/ee-connect.php';
    
    $ownerID = 1;
    $eventID = $_POST['eventidInput'];
    $name = $_POST['nameInput'];
    $type = $_POST['typeInput'];
    $address = $_POST['addressInput'];
    $ages = $_POST['agesInput'];
    $lat = $_POST['latInput'];
    $lng = $_POST['lngInput'];
    $startTime = $_POST['starttimeInput'];
    $endTime = $_POST['endtimeInput'];
    $startDate = $_POST['startdateInput'];
    $endDate = $_POST['enddateInput'];
    $day = $_POST['dayInput'];
    
    if($name) {
        
        if(!$eventID) {
            $eventID = "999";
        }
        if (!$type || $type == "Select") {
            $type = "None";
        }
        if (!$address) {
            $address = "None";
        }
        if (!$ages) {
            $ageMin = 0;
            $ageMax = 0;
        } else {
            $ageMin = substr($ages, 0, 2);  
            $ageMax = substr($ages, -2, 2);
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
                
        $sql = "INSERT INTO events (ownerID, eventID, name, type, address, ageMin, ageMax, lat, lng, timeStart, timeEnd, dateStart, dateEnd, day) VALUES ($ownerID, $eventID, '$name', '$type', '$address', $ageMin, $ageMax, $lat, $lng, '$startTime', '$endTime', '$startDate', '$endDate', '$day')";

        if ($connection->query($sql) === TRUE) {
            echo "200";
        } else {
            echo "400";
        }

        $connection->close();   
    } else {
    }

