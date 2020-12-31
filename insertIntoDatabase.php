<?php

$conn = mysqli_connect("localhost", "root", "", "testing");

if(isset($_POST['submit'])){
    
    if(!empty($_POST['db_date']) && !empty($_POST['starttime']) && !empty($_POST['endtime']) && !empty($_POST['category'])&& !empty($_POST['team_a'])&& !empty($_POST['team_b']) && !empty($_POST['location'])){
     
        $db_date = $_POST ['db_date'] ;
        $starttime = $_POST ['starttime'] ;
        $endtime = $_POST ['endtime'] ;
        $category = $_POST ['category'] ;
        $team_a = $_POST ['team_a'] ;
        $team_b = $_POST ['team_b'] ;
        $location = $_POST ['location'] ;
     
     $query = "insert into events(db_date,starttime,endtime,category,team_a,team_b,location) values('$db_date' , '$starttime', '$endtime', '$category', '$team_a', '$team_b', '$location')";
     
     $run = mysql_query($conn, $query) or die (mysqli_error());
     
     if($run){
         
         echo " From submitted successfully";
     }
     else{
         
         echo "From not submitted";
     }
    }
    else{
        echo "all fields required"; 
    }
}
?>