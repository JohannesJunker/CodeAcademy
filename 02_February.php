
<?php
$content= "<table>";
$conn = mysqli_connect("localhost", "root", "", "testing");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT db_date, day_name,event from calendar_dates where month =2 and year =2020 order by db_date asc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$content=$content . "</tr><td>" . $row["db_date"] . "</td><td>" . $row["day_name"] . "</td><td>" . $row["event"] . "</td><tr>";
}
$content = $content . "</table>";
} else { echo "0 results"; }
$conn->close();
$sidebar =  '<ul id="sidebar">
           
                      
                       <li><a href="01_january.php">January</a></li>
                        <li><a href="02_february.php">February</a></li>
                        <li><a href="03_march.php">March</a></li>
                        <li><a href="04_april.php">April</a></li>
                        <li><a href="05_may.php">May</a></li>
                        <li><a href="06_june.php">June</a></li>
                        <li><a href="07_july.php">July</a></li>
                        <li><a href="08_august.php">August</a></li>
                        <li><a href="09_september.php">September</a></li>
                        <li><a href="10_october.php">October</a></li>
                        <li><a href="11_november.php">November</a></li>
                        <li><a href="12_december.php">December</a></li>
                    
                </ul>';

include 'Template.php';
?>

