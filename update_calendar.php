<html>

<head>
<title>updation</title>
 <style> 
  body{
   background-color:whitesmoke;
   }
  input{
     width : 40%;
     height: 5%;
     border:1px;
     border-radius: 05px;
     padding : 8px 15px 8px 15px;
     margin: 10px 0px 15px 0px;
     box-shadow: 1px 1px 2px 1px grey;
   }
 </style>
</head>
<body>
     <center> 
      <h1>Updating of Data into Arvind Prasad Database using PHP</h1>
   
      <form action="update_calendar.php" method="POST">
    <input type="date" name="db_date" placeholder="Enter date"/></br>
    <input type="time" name="starttime" placeholder="Enter Beginning"/></br>
    <input type="time" name="endtime" placeholder="Enter End"/></br>
    <input type="text" name="category" placeholder="Enter category"/></br>
    <input type="text" name="team_a" placeholder="Enter team_a"/></br>
    <input type="text" name="team_b" placeholder="Enter team_b"/></br>
    <input type="text" name="location" placeholder="Enter location"/></br>
    
    <input type="submit" name="update" value="UPDATE Data"/>
   </form>
  
  </center>
</body>
</html>




<?php

$conn = mysqli_connect("localhost", "root", "", "testing");
$db = mysqli_select_db($conn,'testing');


if(isset($_POST['update']))
{
    
        $db_date = $_POST ['db_date'] ;
        $starttime = $_POST ['starttime'] ;
        $endtime = $_POST ['endtime'] ;
        $category = $_POST ['category'] ;
        $team_a = $_POST ['team_a'] ;
        $team_b = $_POST ['team_b'] ;
        $location = $_POST ['location'] ;
     
  
     $query = "UPDATE calendar_dates SET starttime='$_POST[starttime]', endtime='$_POST[endtime]', category='$_POST[category]', team_a='$_POST[team_a]', team_b='$_POST[team_b]', location='$_POST[location]' where db_date='$_POST[db_date]' ";
   
 
     $query_run = mysqli_query($conn, $query) or die (mysqli_error($conn));
     
   
     
     if($query_run)
   {
    echo '<script type = "text/javascript"> alert("Data Updated")</script>';
   }
  else
   {
    echo '<script type = "text/javascript"> alert("Data Not Updated")</script>';
   }
 }
 
 


//include 'Template.php';
?>
