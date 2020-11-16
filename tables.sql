DROP TABLE VisitedTime;
DROP TABLE VisitedLength;
DROP TABLE PerishableConsumables;
DROP TABLE nonPerishableConsumables;
DROP TABLE TracksDate;
DROP TABLE TracksPaid;
DROP TABLE Warning;
DROP TABLE Fine;
DROP TABLE Violation;
DROP TABLE CustomerPartyContact;
DROP TABLE ScheduledTime;
DROP TABLE ScheduledShift;
DROP TABLE Accesses;
DROP TABLE Account;
DROP TABLE CovidSupplies;
DROP TABLE RecordedTransaction;
DROP TABLE Business;

CREATE TABLE Business
(url         VARCHAR(200),
 name	    VARCHAR(50),
 capacity INTEGER,
 bid         INTEGER,
 address  VARCHAR(50),
 UNIQUE (name, address),
 PRIMARY KEY (bid));

CREATE TABLE CustomerPartyContact
(pNumber		VARCHAR(13),
 name			VARCHAR(20),
 PRIMARY KEY (pNumber));

CREATE TABLE Account
(email       VARCHAR(30),
 password VARCHAR(38),
 PRIMARY KEY (email));
 
 CREATE TABLE VisitedLength
(arrivalTime		TIMESTAMP,
Duration	INTEGER,
endTime	TIMESTAMP,
PRIMARY KEY (arrivalTime, Duration));

CREATE TABLE VisitedTime
(arrivalTime		TIMESTAMP,
pNumber	VARCHAR(13),
bid		INTEGER,
Duration	INTEGER,
PRIMARY KEY (arrivalTime, pNumber, bid),
FOREIGN KEY (pNumber) REFERENCES CustomerPartyContact (pNumber)
	/* ON UPDATE CASCADE */,
FOREIGN KEY (bid) REFERENCES Business (bid)
/* ON UPDATE CASCADE */,
FOREIGN KEY (arrivalTime, Duration) REFERENCES VisitedLength (arrivalTime, Duration)
/* ON UPDATE CASCADE */
ON DELETE CASCADE);

CREATE TABLE PerishableConsumables
(expirationDate	DATE,
 cid			INTEGER,
 bid			INTEGER,
FOREIGN KEY (bid) REFERENCES Business (bid) /* ON UPDATE CASCADE */,
 PRIMARY KEY (cid, bid));

CREATE TABLE nonPerishableConsumables
(cid			INTEGER,
 bid			INTEGER,
FOREIGN KEY (bid) REFERENCES Business (bid) /* ON UPDATE CASCADE */,
 PRIMARY KEY (cid, bid));

CREATE TABLE Violation
(law		VARCHAR(50),
 description	VARCHAR(400),
 PRIMARY KEY (law));

CREATE TABLE Warning
(law		VARCHAR(50),
 severity	INTEGER,
 PRIMARY KEY (law),
 FOREIGN KEY (law) REFERENCES Violation (law)
/* ON UPDATE CASCADE */
ON DELETE CASCADE);

CREATE TABLE Fine
(law		VARCHAR(50),
 amount	INTEGER,
 PRIMARY KEY (law),
 FOREIGN KEY (law) REFERENCES Violation (law)
/* ON UPDATE CASCADE */
ON DELETE CASCADE);


CREATE TABLE Accesses
(email VARCHAR(30),
 bid     INTEGER,
 writePermission NUMBER(1),
 PRIMARY KEY(email, bid),
 FOREIGN KEY(email) REFERENCES Account (email) ON DELETE CASCADE,
 	/* ON UPDATE CASCADE */
 FOREIGN KEY(bid) REFERENCES Business (bid)
	/* ON UPDATE CASCADE */);

CREATE TABLE CovidSupplies
(quantity    INTEGER,
 csid	       INTEGER,
 bid 	       INTEGER  NOT NULL DEFERRABLE,
 PRIMARY KEY (csid),
 FOREIGN KEY (bid) REFERENCES Business (bid)
/* ON UPDATE CASCADE */);

CREATE TABLE ScheduledShift
(shiftID    INTEGER,
 bid          INTEGER NOT NULL,
 email      VARCHAR(30) NOT NULL,
 Wage	     DECIMAL(5,2),
PRIMARY KEY (shiftID),
FOREIGN KEY (bid) REFERENCES Business (bid),
/* ON UPDATE CASCADE */
FOREIGN KEY (email) REFERENCES Account (email)
ON DELETE CASCADE
/* ON UPDATE CASCADE */);

CREATE TABLE ScheduledTime
(
 startTime TIMESTAMP,
 endTime TIMESTAMP,
 duration DECIMAL(4,2)
/* ON UPDATE CASCADE */);

CREATE TABLE RecordedTransaction
(tid INTEGER,
bid INTEGER NOT NULL,
amount DECIMAL(7,2),
transactionDate TIMESTAMP,
PRIMARY KEY (tid),
FOREIGN KEY (bid) REFERENCES Business (bid)
    /* ON UPDATE CASCADE */);

CREATE TABLE TracksDate
(bid		INTEGER,
email		VARCHAR(30),
law		VARCHAR(50),
violationDate	TIMESTAMP,
PRIMARY KEY (bid, email, law),
FOREIGN KEY (bid) REFERENCES Business (bid)
	/* ON UPDATE CASCADE */,
FOREIGN KEY (email) REFERENCES Account (email)
	/* ON UPDATE CASCADE */
	ON DELETE CASCADE,
FOREIGN KEY (law) REFERENCES Violation (law)
/* ON UPDATE CASCADE */
ON DELETE CASCADE);

CREATE TABLE TracksPaid
	(bid		INTEGER,
email		VARCHAR(30),
law		VARCHAR(50),
paid		NUMBER(1),
PRIMARY KEY (bid, email, law),
FOREIGN KEY (bid) REFERENCES Business (bid)
/* ON UPDATE CASCADE */,
FOREIGN KEY (email) REFERENCES Account (email)
/* ON UPDATE CASCADE */
ON DELETE CASCADE,
FOREIGN KEY (law) REFERENCES Violation (law)
	/* ON UPDATE CASCADE */
	ON DELETE CASCADE);