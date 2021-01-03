<?php
include 'tableHead.php';
$content= $tableHead;
$conn = mysqli_connect("localhost", "root", "", "testing");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "select db_date, starttime, endtime, category, team_a, team_b, location 
from calendar_dates
where location IS NOT NULL
order by db_date asc;" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$content=$content . "<tr><td>" . $row["db_date"]. "</td><td>" . $row["starttime"] . "</td><td>". $row["endtime"] . "</td><td>". $row["category"] . "</td><td>". $row["team_a"] . "</td><td>". $row["team_b"] . "</td><td>". $row["location"] . "</td><tr>";
}
$content = $content . "</table>";
} else { echo "0 results"; }
$conn->close();

$sidebar ="";

include 'Template.php';
?>



