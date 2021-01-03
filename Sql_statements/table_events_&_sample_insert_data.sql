
-- talbe for storing events, events have to be inserted manually 
DROP TABLE IF EXISTS events;
CREATE TABLE events (
	id 	INTEGER PRIMARY KEY NOT NULL AUTO_increment, -- 			'1', '2'....
   	db_date                 DATE NOT NULL,
    	starttime            	TIME NOT NULL, -- '18:30:00'
    	endtime               	TIME NOT NULL, -- '20:30:00'
    	category             	VARCHAR(100) NOT NULL, -- 								'Veltins_Arena'
   	team_a               	VARCHAR(100) NOT NULL, -- 								'real_madrid'...
    	team_b               	VARCHAR(100) NOT NULL, -- 								'bayern_muenchen'...
    	location              VARCHAR(100) NOT NULL -- 								'St_gallen', 'Wien'... 
);


-- insert some Eventdata

-- football
insert into events (db_date,starttime, endtime, category, team_a, team_b,location)
values ("2020-02-01", "15:30:00", "17:15:00",'Football','TSG Hoffenheim ', 'Freiburg', 'Prezero-Arena');

insert into events (db_date,starttime, endtime, category, team_a, team_b,location)
values ("2020-01-09", "15:30:00", "17:15:00",'Football','Freiburg', 'koeln', 'Schwarzwaldstadion');

insert into events (db_date,starttime, endtime, category, team_a, team_b,location)
values ("2020-04-01", "15:30:00", "17:15:00",'Football','Bayern', 'freiburg', 'Allianz_Arena');


-- baseball
insert into events (db_date,starttime, endtime, category, team_a, team_b,location)
values ("2020-01-09", "15:30:00", "17:15:00",'baseball','Tampa_Bay_Rays', 'Oakland_Athletics', 'tampa-Arena');

insert into events (db_date,starttime, endtime, category, team_a, team_b,location)
values ("2020-01-17", "15:30:00", "17:15:00",'baseball','Oakland_Athletics', 'Tampa_Bay_Rays', 'Okaland-Arena');

insert into events (db_date,starttime, endtime, category, team_a, team_b,location)
values ("2020-01-09", "15:30:00", "17:15:00",'baseball','chicargo_White_Sox', 'Toronto_Blue_Jays', 'Chicargo-Arena');

insert into events (db_date,starttime, endtime, category, team_a, team_b,location)
values ("2020-03-03", "15:30:00", "17:15:00",'baseball','Toronto_Blue_Jays', 'chicargo_White_Sox', 'Toronto-Arena');


-- ice_hockey
insert into events (db_date,starttime, endtime, category, team_a, team_b,location)
values ("2020-01-28", "15:30:00", "17:15:00",'ice_hockey','Columbus_Blue_Jackets', 'New_Jerey_devils', 'New_jersy-Arena');

insert into events (db_date,starttime, endtime, category, team_a, team_b,location)
values ("2020-01-22", "15:30:00", "17:15:00",'ice_hockey','Toronto_Blue_Jays', 'Columbus_Blue_Jackets', 'Toronto-Arena');

insert into events (db_date,starttime, endtime, category, team_a, team_b,location)
values ("2020-02-14", "15:30:00", "17:15:00",'ice_hockey','New_Jerey_devils', 'chicargo_White_Sox', 'New_jersey-Arena');
