/*
Daniel Hinbest
lab9_users.sql
30 March 2020
WEBD2201
*/

--Drops tables if they exist to clear existing data
DROP TABLE IF EXISTS users;

--Creates a table name automobiles and creates the fields
CREATE TABLE users(
	id VARCHAR(20) PRIMARY KEY,
	password VARCHAR(15) NOT NULL,
	first_name VARCHAR(20) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	email_address VARCHAR(255) NOT NULL,
	enrol_date DATE NOT NULL,
	last_access DATE NOT NULL
);

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'jdoe',
	'testpass',
	'John',
	'Doe',
	'jdoe@durhamcollege.ca',
	'2020-1-1',
	'2020-2-1'
);

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'hinbestd',
	'100717231',
	'Daniel',
	'Hinbest',
	'daniel.hinbest@dcmail.ca',
	'2020-1-1',
	'2020-2-1'
);

INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) VALUES(
	'smithj',
	'jsmith',
	'John',
	'Smith',
	'johnsmith@durhamcollege.ca',
	'2020-1-1',
	'2020-2-1'
);
