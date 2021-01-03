#1. Coding Exercise
Goal is to implement a calendar for sport events. Events may be added to the calendar and it
should be possible to categorize the events based on sports.
Examples:
 Sat., 18.07.2019, 18:30, Football, Salzburg – Sturm
 Sun., 23.10.2019, 09:45, Ice Hockey, KAC - Capitals


#2. Task 1 - Modelling:
Start with identifying the database entities and then create a suitable database diagram (ERD).
For the Calendar i created two tables. One Table "calendar dates"  with Calendar information and placeholder for the Event information.
the other table "Events" contains event information.
![ERD](https://github.com/JohannesJunker/CodeAcademy/blob/master/ERM-sheets/ERD-Calendar.png)

#3. Task 2 – DB Structure/Data:
For the creation of the database i used mySQL workbench. 
With a stored procedure i filled the calendar with date information.
Becauce of the placeholder, you can insert Events with update statements into the "calendar dates" table.
All files about the database are in the folder "sql_statements".

#4. Task 3 – HTML/PHP:

Structure:
The index.php displays the structure of the calendar website.
![index](https://github.com/JohannesJunker/CodeAcademy/blob/master/Images/Index.png)
I created a template (template.php) and linked it to every file, so that the layout will be the same on every page.
If you click on the "show Calendar" button, it will open to the "calendar.php" and displays jan-dec in the sidebar menue.
![sidbar_menue](https://github.com/JohannesJunker/CodeAcademy/blob/master/Images/sidebar_menu.png)
Every month is build of a different file (e.g. 01_january.php), where it stores the calendar information of this month.

The "show Events" button calls the "showEvents.php", where you can see upcomming events.
For demonstration, i inserted some sample event data categorized based on the Sport-category with the files "football_events.php", "baseball_events.php" and "ice_hockey.php".
![show_events](https://github.com/JohannesJunker/CodeAcademy/blob/master/Images/show_events.png)

The "add Event" to Calendar calls the file "addEventToCalendar.php" where you can insert yout own event.
The event will be displayed with the click of the button "My Events" or in the showed calendar information in the respective month.  
![add_events](https://github.com/JohannesJunker/CodeAcademy/blob/master/Images/add_events.png)

 

