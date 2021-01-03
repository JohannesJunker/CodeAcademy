
<?php
$content= '
      <h1>Add Event to your calendar</h1>
   
      <form action="addEventToCalendar.php" method="POST">
    <input type="date" name="db_date" placeholder="Enter date in Format YYYY-MM-DD "/></br>
    <input type="time" name="starttime" placeholder="Enter Beginning for example 15:30:00"/></br>
    <input type="time" name="endtime" placeholder="Enter End for example 18:30:00"/></br>
    <input type="text" name="category" placeholder="Enter category of Sport"/></br>
    <input type="text" name="team_a" placeholder="Enter team_a"/></br>
    <input type="text" name="team_b" placeholder="Enter team_b"/></br>
    <input type="text" name="location" placeholder="Enter location"/></br>
    
    <input type="submit" name="update" value="UPDATE Data"/>
   </form>';
  
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
    echo '<script type = "text/javascript"> alert("Data_Updated")</script>';
   }
  else
   {
    echo '<script type = "text/javascript"> alert("Data_Not_Updated")</script>';
   }
 }
 $sidebar="";
 
 include 'Template.php';
?>


