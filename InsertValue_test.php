<!DOCTYPE html>
<html>
<head>
        <title>Insert form value into database</title>
</head>
<body>
<form action="insertIntoDatabase.php" method="post">
<table>
    <tr>
    <td>db_date:</td>
    <td><input type="date" name="db_date">
    </tr>
    <tr>
    <td>starttime:</td>
    <td><input type="time" name="starttime">
    </tr>
    <tr>
    <td>endtime:</td>
    <td><input type="time" name="endtime">
    </tr>
    <tr>
    <td>category:</td>
    <td><input type="text" name="category">
    </tr>
    <tr>
    <td>team_a:</td>
    <td><input type="text" name="team_a">
    </tr>
     <td>team_b:</td>
    <td><input type="text" name="team_b">
    </tr>
     <td>location:</td>
    <td><input type="text" name="location">
    </tr>
    <tr>
        <td><input type ="submit" name ="submit" value ="Safe"></td>
    </tr>
            
     
    
    
    
        
</table>
</form>
</body>
</html>
