<?php

$content= '<table>
<h3>Upcomming Events</h3>';    

$conn = mysqli_connect("localhost", "root", "", "testing");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT* from events order by db_date limit 4";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$content=$content . "<tr><td>" . $row["id"]. "</td><td>" . $row["db_date"] . "</td><td>". $row["starttime"] . "</td><td>". $row["endtime"] . "</td><td>". $row["category"] . "</td><td>". $row["team_a"] . "</td><td>". $row["team_b"] . "</td><td>"
. $row["location"]. "</td></tr>";
}
$content = $content . "</table>";
} else { echo "0 results"; }
$conn->close();

$sidebar =  '<ul id="sidebar">
           
                        <li><a href="football_events.php">football</a></li>
                        <li><a href="baseball_events.php">baseball</a></li>
                        <li><a href="icehockey_events.php">ice_hockey</a></li>
                </ul>';
include 'Template.php';
?>


