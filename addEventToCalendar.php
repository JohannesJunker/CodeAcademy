<?php

$content= "<table>";
$conn = mysqli_connect("localhost", "root", "", "testing");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "select a.db_date, starttime, endtime, category, location 
from calendar_dates a, events b
where a.db_date=b.db_date
order by db_date asc;" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$content=$content . "<tr><td>" . $row["db_date"]. "</td><td>" . $row["starttime"] . "</td><td>". $row["endtime"] . "</td><td>". $row["category"] . "</td><td>". $row["location"] . "</td><tr>";
}
$content = $content . "</table>";
} else { echo "0 results"; }
$conn->close();

$sidebar ='"";
<html>
<head>
        <title>Insert form value into database</title>
</head>
    <body>
        <form action="insertIntoDatabase.php" method="post">   
            <label>db_date:</label><input type ="date" name ="db_name"><br>
            <label>starttime:</label><input type ="time" name ="starttime"><br>
            <label>endtime:</label><input type ="time" name ="endtime"><br>
            <label>category:</label><input type ="text" name ="category"><br>
            <label>team_a:</label><input type ="text" name ="team_a"><br>
            <label>team_b:</label><input type ="text" name ="team_b"><br>
            <label>location:</label><input type ="text" name ="location"><br> 
            <button type ="submit" name ="submit">Submit</button>
      
         </form>

    </body>
</html>
';


include 'Template.php';
?>



