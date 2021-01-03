select*
from calendar_dates;

update calendar_dates 
set starttime = "15:30:00",
 category = "17:15:00",
 team_a = 'New_Jerey_devils',
 team_b = 'chicargo_White_Sox',
 location = 'New_jersey-Arena'
 where id = 20200102;
 
 UPDATE `testing`.`calendar_dates`
 SET `id_event` = 'hallo',
 `starttime` = '12',
 `endtime` = '08',
 `category` = '123',
 `team_a` = 'aswdas',
 `team_b` = 'sfqef', 
 `Location` = 'sa' WHERE (`id` = '20200101');

select a.db_date, a.starttime, a.endtime, a.category, a.team_a, a.team_b, a.location 
from calendar_dates a, events b
where a.db_date=b.db_date
order by db_date asc
limit 5;
