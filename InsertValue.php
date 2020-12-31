<!DOCTYPE html>
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
