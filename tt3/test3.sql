/*
Daniel Hinbest
test3.sql
16 April 2020
WEBD2201
*/

DROP TABLE IF EXISTS contacts;

CREATE TABLE contacts (
	email_address VARCHAR(255) PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	phone_number BIGINT,
	connected DATE NOT NULL
);

INSERT INTO contacts (email_address, name, phone_number, connected) VALUES (
	'jdoe@durhamcollege.ca',
	'John Doe',
	9052441234,
	'2019-05-06'
);

INSERT INTO contacts (email_address, name, phone_number, connected) VALUES (
	'dan.demann@gmail.com',
	'Dan DeMann',
	4168235432,
	'2019-05-06'
);

INSERT INTO contacts (email_address, name, connected) VALUES (
	'daniel.hinbest@dcmail.ca',
	'Daniel Hinbest',
	'2020-04-16'
);
