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
    <tbody>
            <?php
                include 'dbconnect.php';

                $sql = "SELECT * FROM events WHERE ownerID = 1";
                $result = $connection->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr class='odd gradeX'>";
                        echo "<td>". $row["eventID"]. "</td><td> ". $row["name"]. "</td><td>". $row["type"]. "</td><td>". $row["description"]. "</td><td>". $row["lat"]. "</td><td>". $row["lng"]. "</td><td>". $row["ageMin"]. " - ". $row["ageMax"]. "</td><td>". $row["timeStart"]. " - ". $row["timeEnd"]. "</td><td>". $row["dateStart"]. " | ". $row["dateEnd"]. "</td><td>". $row["day"]. "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
                $connection->close();
            ?>
    </tbody>
</table>