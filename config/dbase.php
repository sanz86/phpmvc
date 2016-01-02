<?php
$query = 'CREATE TABLE IF NOT EXISTS booking (
        id  INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
        booking_id VARCHAR(200) NOT NULL,
		name VARCHAR(200),
		phone_number  VARCHAR(200) NOT NULL,
        email   VARCHAR(200),
		source_point VARCHAR(200),
		destination_point VARCHAR(200),
		number_of_adult_passenger INTEGER,
		number_of_child_passenger INTEGER,
		cab_type VARCHAR(200),
		time_of_travel VARCHAR(200),
		date_of_travel  VARCHAR(200),
		message VARCHAR(200),
		create_date DATE,
		status VARCHAR(20),
        PRIMARY KEY(id)
    ) 	
    ENGINE=MyISAM';
mysql_query($query, $db) or die(mysql_error($db));

