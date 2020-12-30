<?php

$title = "calendar_display_Johannes_junker";
$content= "<table>";
$conn = mysqli_connect("localhost", "root", "", "testing");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT* from events";
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
           
                        <li><a href="January.php">January</a></li>
                        <li><a href="?month=january">February</a></li>
                        <li><a href="?month=january">march</a></li>
                        <li><a href="?month=january">April</a></li>
                        <li><a href="?month=january">May</a></li>
                        <li><a href="?month=january">June</a></li>
                        <li><a href="?month=january">July</a></li>
                        <li><a href="?month=january">August</a></li>
                        <li><a href="?month=january">September</a></li>
                        <li><a href="?month=january">October</a></li>
                         <li><a href="?month=january">November</a></li>
                        <li><a href="?month=january">December</a></li>
                    
                </ul>';

//$content = "asdasdasf" . $_GET['month'];
$content= "<table>";
$conn = mysqli_connect("localhost", "root", "", "testing");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT db_date, day_name from calendar_dates where month =1 and year =2020 order by db_date desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$content=$content . "</tr><td>" . $row["db_date"] . "</td><td>". $row["day_name"] . "</td><tr>";
}
$content = $content . "</table>";
} else { echo "0 results"; }
$conn->close();



include 'Template.php';
?>
