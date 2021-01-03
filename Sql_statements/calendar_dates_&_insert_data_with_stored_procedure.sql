-- use december as sample project
-- end of create_db_schema
DROP TABLE IF EXISTS calendar_dates;
CREATE TABLE calendar_dates (
    	id                 	INTEGER PRIMARY KEY,  -- year*						10000+month*100+day
    	db_date              	DATE NOT NULL,
    	year                	INTEGER NOT NULL,
    	month                	INTEGER NOT NULL, -- 1 to 12
    	day                  	INTEGER NOT NULL, -- 1 to 31
   	week                 	INTEGER NOT NULL, -- 1 to 											52/53
   	day_name             	VARCHAR(9) NOT NULL, -- 							'Monday', 'Tuesday'...
  	month_name           	VARCHAR(9) NOT NULL, -- 							'January', 'February'...
	id_event			varchar(59),
     	starttime 			time,
     	endtime			time,
     	category 			varchar(59),
	team_a 			varchar(59),
	team_b	 		varchar(59),
	Location 			varchar(59),

        UNIQUE td_ymd_idx (year,month,day),
        UNIQUE td_dbdate_idx (db_date)

);


DROP PROCEDURE IF EXISTS fill_calendar_dates;
DELIMITER //
CREATE PROCEDURE fill_calendar_dates(IN startdate DATE,IN stopdate DATE)
BEGIN
    DECLARE currentdate DATE;
    SET currentdate = startdate;
    WHILE currentdate < stopdate DO
        INSERT INTO calendar_dates VALUES (
                        YEAR(currentdate)*10000+MONTH(currentdate)*100 + DAY(currentdate),
                        currentdate,
                        YEAR(currentdate),
                        MONTH(currentdate),
                        DAY(currentdate),
                        WEEKOFYEAR(currentdate),
                        DATE_FORMAT(currentdate,'%W'),
                        DATE_FORMAT(currentdate,'%M'),
                        NULL,
						NULL,
                        null,
                        null,
                        null,
                        null,
                        null);
        SET currentdate = ADDDATE(currentdate,INTERVAL 1 DAY);
    END WHILE;
END
//
DELIMITER ;

TRUNCATE TABLE calendar_dates;

CALL fill_calendar_dates('2020-01-01','2021-01-01');
OPTIMIZE TABLE calendar_dates;
