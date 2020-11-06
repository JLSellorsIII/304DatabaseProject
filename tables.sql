DROP TABLE Business;
DROP TABLE VisitedLength;
DROP TABLE VisitedTime;
DROP TABLE Consumables;
DROP TABLE Perishables;
DROP TABLE nonPerishables;
DROP TABLE Violation;
DROP TABLE Warning;
DROP TABLE Fine;
DROP TABLE CustomerPartyContact;
DROP TABLE Account;
DROP TABLE Accesses;
DROP TABLE CovidSupplies;
DROP TABLE ScheduledShift;
DROP TABLE ScheduledTime;
DROP TABLE RecordedTransaction;
DROP TABLE TracksDate;
DROP TABLE TracksPaid;

CREATE TABLE Business
(url         VARCHAR(200),
 name	    VARCHAR(50),
 capacity INTEGER,
 bid         INTEGER,
 address  VARCHAR(50),
 UNIQUE (name, address),
 PRIMARY KEY bid);

CREATE TABLE VisitedLength
(Time		DATETIME,
Duration	INTEGER,
endTime	DATETIME,
PRIMARY KEY (Time, Duration));

CREATE TABLE VisitedTime
(Time		DATETIME,
pNumber	VARCHAR(13),
bid		INTEGER,
Duration	INTEGER,
PRIMARY KEY (Time, pNumber, bid),
FOREIGN KEY (pNumber) REFERENCES CustomerPartyContact (pNumber)
	ON UPDATE CASCADE,
FOREIGN KEY (bid) REFERENCES Business (bid)
ON UPDATE CASCADE)
FOREIGN KEY (Time, Duration) REFERENCES Visited (Time, Duration)
ON UPDATE CASCADE
ON DELETE CASCADE);

CREATE TABLE Consumables
(quantity	INTEGER,
 cid                INTEGER,
 bid		INTEGER NOT NULL,
 FOREIGN KEY bid REFERENCES Business
ON UPDATE CASCADE,
PRIMARY KEY (bid, cid));

CREATE TABLE Perishables
(expirationDate	DATE,
 cid			INTEGER,
 bid			INTEGER
 PRIMARY KEY (cid, bid),
 FOREIGN KEY cid REFERENCES Consumables
ON DELETE CASCADE
ON UPDATE CASCADE
 FOREIGN KEY bid REFERENCES Business
ON UPDATE CASCADE);

CREATE TABLE nonPerishables
(cid	        INTEGER,
 PRIMARY KEY (cid, bid),
 FOREIGN KEY cid REFERENCES Consumables
ON DELETE CASCADE
ON UPDATE CASCADE
 FOREIGN KEY bid REFERENCES Business
ON UPDATE CASCADE);

CREATE TABLE Violation
(law		VARCHAR(50),
 description	VARCHAR(400)
 PRIMARY KEY law);

CREATE TABLE Warning
(law		VARCHAR(50),
 level		INTEGER,
 PRIMARY KEY (law),
 FOREIGN KEY (law) REFERENCES Violation (law)
ON UPDATE CASCADE
ON DELETE CASCADE);

CREATE TABLE Fine
(law		VARCHAR(50),
 amount	INTEGER,
 PRIMARY KEY (law),
 FOREIGN KEY (law) REFERENCES Violation (law)
ON UPDATE CASCADE
ON DELETE CASCADE);

CREATE TABLE CustomerPartyContact
(pNumber		VARCHAR(13),
 name			VARCHAR(20),
 PRIMARY KEY (pNumber));

CREATE TABLE Account
(email       VARCHAR(30),
 password VARCHAR(38),
 PRIMARY KEY (email));

CREATE TABLE Accesses
(email VARCHAR(30),
 bid     INTEGER,
 write? BOOLEAN,
 PRIMARY KEY(email, bid),
 FOREIGN KEY(email) REFERENCES Account (email)
	ON UPDATE CASCADE
ON DELETE CASCADE,
 FOREIGN KEY(bid) REFERENCES Business
	ON UPDATE CASCADE);

CREATE TABLE CovidSupplies
(quantity    INTEGER,
 csid	       INTEGER,
 bid 	       INTEGER  NOT NULL,
 PRIMARY KEY csid,
 FOREIGN KEY bid REFERENCES Business (bid),
ON UPDATE CASCADE
SET CONSTRAINT bid NOT NULL DEFERRED);

CREATE TABLE ScheduledShift
(shiftID    INTEGER,
 bid          INTEGER NOT NULL,
 email      VARCHAR(30) NOT NULL,
 Wage	     DECIMAL(5,2),
 UNIQUE(email, startTime),
PRIMARY KEY shiftID,
FOREIGN KEY bid REFERENCES Business (bid)
ON UPDATE CASCADE
FOREIGN KEY (email) REFERENCES Account (email)
ON DELETE CASCADE
ON UPDATE CASCADE);

CREATE TABLE ScheduledTime
(shiftID: integer,
 	 startTime: DATETIME,
 endTime: DATETIME,
 duration: DECIMAL(4,2),
PRIMARY KEY shiftID,
FOREIGN KEY shiftID REFERENCES ScheduledShift
ON DELETE CASCADE
ON UPDATE CASCADE);

CREATE TABLE RecordedTransaction (tid: INTEGER,
bid:INTEGER NOT NULL,
amount: DECIMAL(7,2),
date: DATETIME,
PRIMARY KEY tid
FOREIGN KEY bid REFERENCES BUSINESS
    ON DELETE NO ACTION
    ON UPDATE CASCADE);

CREATE TABLE TracksDate
(bid		INTEGER,
email		VARCHAR(30,
Law		VARCHAR(50),
date		DATETIME,
PRIMARY KEY (bid, email, law),
FOREIGN KEY (bid) REFERENCES Business (bid)
	ON UPDATE CASCADE,
FOREIGN KEY (email) REFERENCES Account (email)
	ON UPDATE CASCADE
	ON DELETE CASCADE,
FOREIGN KEY (law) REFERENCES Violation (law)
ON UPDATE CASCADE
ON DELETE CASCADE);

CREATE TABLE TracksPaid
	(bid		INTEGER,
email		VARCHAR(30),
law		VARCHAR(50),
paid		BOOLEAN,
PRIMARY KEY (bid, email, law),
FOREIGN KEY (bid) REFERENCES Business (bid)
ON UPDATE CASCADE,
FOREIGN KEY (email) REFERENCES Account (email)
ON UPDATE CASCADE
ON DELETE CASCADE,
FOREIGN KEY (Law) REFERENCES Violation (law)
	ON UPDATE CASCADE
	ON DELETE CASCADE);
