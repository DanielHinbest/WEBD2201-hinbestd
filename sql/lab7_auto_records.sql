/*
Daniel Hinbest
lab7_auto_records.sql
26 March 2020
WEBD2201
*/

--Drops tables if they exist to clear existing data
DROP TABLE IF EXISTS automobiles;

--Creates a table name automobiles and creates the fields
CREATE TABLE automobiles(
	id INT PRIMARY KEY NOT NULL,
	make VARCHAR(15) NOT NULL,
	model VARCHAR(20) NOT NULL,
	year INT NOT NULL,
	owner VARCHAR(20) NOT NULL,
	msrp NUMERIC(7,2) NOT NULL,
	purchase_date DATE NOT NULL
);

INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	1,
	'GMC',
	'Acadia',
	2014,
	'Nobody',
	15100,
	'2017-07-16');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	2,
	'Hudson',
	'Hornet',
	1951,
	'Nobody',
	10000,
	'1987-05-01');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	3,
	'Chevrolet',
	'Cobalt',
	2010,
	'Nobody',
	9980,
	'2019-10-11');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	4,
	'Chevrolet',
	'Corvette',
	2006,
	'Nobody',
	39800,
	'2020-03-26');
INSERT INTO automobiles(id, make, model, year, owner, msrp, purchase_date) VALUES(
	5,
	'Toyota',
	'RAV4',
	2020,
	'Nobody',
	28090,
	'2020-03-19');
SELECT automobiles.make, automobiles.model, automobiles.year, automobiles.msrp
	FROM automobiles
	ORDER BY automobiles.year ASC;
UPDATE automobiles
	SET owner = 'Daniel'
	WHERE automobiles.model = 'Corvette';
DELETE FROM automobiles
	WHERE automobiles.model = 'RAV4';