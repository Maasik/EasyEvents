<?php 
    include 'core/dbconnect.php';

    $sql = "select * from events";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    $events = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $events[] = $row;
    }

    $filename = realpath( $_SERVER['DOCUMENT_ROOT'] ) . '/assets/data/autodata.geojsonp';
    $data = "data_callback(" . json_encode(array('markers' => $events)) . ");";
    
    if (is_writable($filename)) {
        if (!$handle = fopen($filename, 'w')) {
            echo "400";
            exit;
        }
        if (fwrite($handle, $data) === FALSE) {
            echo "400";
        exit;
        }

        echo "200";
        fclose($handle);
    } else {
        echo "400";
    }

    mysqli_close($connection);
