CREATE table finaladmins(
	user_id int not null auto_increment,
	first_name varchar (255),
	last_name varchar (255),
	username varchar (255),
	password varchar (255),
    primary key (user_id)
);
CREATE table finaldeal(
	ID int not null auto_increment,
	fname varchar (255),
	lname varchar (255),
	model varchar (255),
	caryear varchar (255),
	telNumber varchar (255),
    primary key (ID)
);
INSERT into phppeople(fname, lname, model, caryear, telNumber)
VALUES
    ('Ricky', 'Bobby', 'Hyundai, Sonata', '2021', '7051234567'),
	('Jisung', 'Park', 'Kia, Sportage', '2021', '7051234567'),
	('Hyunjin', 'Ryu', 'Hyundai, gv80', '2021', '7051234567'),
	('Kai', 'Jin', 'Hyundai, gv70', '2021', '7051234567'),
	('kelly', 'Johnson', 'Hyundai, g90', '2021', '7051234567'),
	('Bruce', 'Big', 'Hyundai, g80', '2021', '7051234567');