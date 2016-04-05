<?php 
    include 'includes/database.php';
    $sql = "select * from events";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    $events = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $events[] = $row;
    }

    $filename = realpath( $_SERVER['DOCUMENT_ROOT'] ) . '/data/autodata.geojsonp';
    $data = "data_callback(" . json_encode(array('markers' => $events)) . ");";
    
    if (is_writable($filename)) {
        if (!$handle = fopen($filename, 'a')) {
            echo "Cannot open file ($filename)";
            exit;
        }
        if (fwrite($handle, $data) === FALSE) {
            echo "Cannot write to file ($filename)";
        exit;
        }

        echo "Success, updated ($filename)";
        fclose($handle);
    } else {
        echo "The file $filename is not writable";
    }

    mysqli_close($connection);
