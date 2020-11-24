-- Insert: Example queries

INSERT INTO customerPartyContact(pNumber, name) VALUES ('cNum', 'cName');

-- First check if there is already a matching time entry
SELECT * FROM VisitedLength WHERE VisitedLength.arrivalTime='20.11.2020:16:21:00' AND VisitedLength.duration='2';
-- Then insert
INSERT INTO VisitedLength(arrivalTime, Duration, endTime)
VALUES (TO_DATE('20.11.2020:18:21:00', 'DD.MM.YYYY:HH24:MI:SS'), '2', TO_DATE('20.11.2020:20:21:00', 'DD.MM.YYYY:HH24:MI:SS'));
INSERT INTO VisitedTime(arrivalTime, pNumber, bid, duration)
VALUES (TO_DATE('20.11.2020:18:21:00', 'DD.MM.YYYY:HH24:MI:SS'), '16043402230', '1', '2');

INSERT INTO Violation(law, description) VALUES ('COVID VIOLATION', 'test new desc');
INSERT INTO Warning(law, severity) VALUES ('COVID VIOLATION', 3);

INSERT INTO Violation(law, description) VALUES ('No Masks', 'test new desc');
INSERT INTO Fine(law, amount) VALUES ('No Masks', 300);

-- First check if there is already a matching time entry
SELECT * FROM ScheduledTime WHERE startTime='20.11.2020:17:36:00' AND endTime='20.11.2020:18:35:00');
-- Then insert
INSERT INTO ScheduledTime(startTime,endTime,duration)
VALUES (TO_DATE('20.11.2020:17:36:00', 'DD.MM.YYYY:HH24:MI:SS'), TO_DATE('20.11.2020:18:35:00', 'DD.MM.YYYY:HH24:MI:SS'), 0);
INSERT INTO ScheduledShift(shiftID, bid, email, Wage, startTime, endTime)
VALUES (10, 4, 'bob@uncle.com', 12, TO_DATE('20.11.2020:17:36:00', 'DD.MM.YYYY:HH24:MI:SS'), TO_DATE('20.11.2020:18:35:00', 'DD.MM.YYYY:HH24:MI:SS'));

INSERT INTO TracksDate(bid, email, law, violationDate) VALUES (1, 'bart@simpson.com', 'Overcapacity', '');
INSERT INTO TracksPaid(bid, email, law, paid) VALUES (1, 'bart@simpson.com', 'Overcapacity', null);

INSERT INTO Business(url, name, capacity, bid, address) VALUES ('business.example.com ', 'Business', '35', '45', '123 business st');

INSERT INTO RecordedTransaction(tid, bid, amount, transactionDate) VALUES ('1234', '1', '300', '12.aug.2020');

INSERT INTO Account(email, password) VALUES ('test@email.com', 'password');

INSERT INTO CovidSupplies(quantity, csid, bid) VALUES ('200', '32', '1');

INSERT INTO PerishableConsumables(expirationDate, cid, bid) VALUES ('11.aug.2020', '2', '1');

INSERT INTO NonPerishableConsumables(cid, bid) VALUES ( '23', '1');

-- Update: Example queries
UPDATE TracksPaid SET paid=1 WHERE bid='4' AND email='bob@uncle.com' AND law='Divider';

UPDATE Fine SET amount=5000 WHERE law='Overcapacity';

UPDATE Warning SET severity=2 WHERE law='Cash';

UPDATE Violation SET description='new description' WHERE law='Overcapacity';

UPDATE Business SET address='1234 new st' WHERE bid=2;

-- Delete: Example queries
DELETE FROM Fine WHERE law='Overcapacity';
DELETE FROM Violation WHERE law='Overcapacity';

DELETE FROM Warning WHERE law='Cash';
DELETE FROM Violation WHERE law='Cash';

DELETE FROM Account WHERE email='bob@uncle.com';

DELETE FROM Business WHERE bid=1;

DELETE FROM ScheduledShift WHERE shiftID='4';


-- Selection: Select covid supplies below an input quantity x.
SELECT * FROM CovidSupplies
                            WHERE CovidSupplies.quantity<'"
                            . $_POST["x"] . "'

-- Selection: Select businesses with capacity between inputs x and y.
SELECT * FROM Business
WHERE Business.capacity >= '" . $_POST["x"] . "'AND  Business.capacity <= '". $_POST["y"] . "'

-- Projection: List the name, address, and capacity of all businesses visited by a customer.
SELECT Business.name, Business.address, Business.capacity FROM Business, VisitedTime WHERE
        VisitedTime.bid = Business.bid AND VisitedTime.pNumber = '". $_POST["customer"] . "'

-- Join: List the phone numbers of customers who visited a business (joined by pNumber).
SELECT CustomerPartyContact.name, CustomerPartyContact.pNumber FROM VisitedTime, CustomerPartyContact WHERE
        CustomerPartyContact.pNumber = VisitedTime.pNumber AND VisitedTime.bid = '" . $_POST["business"] . "'

-- Aggregation with Group By: List Total Number of Visits to All Businesses by pNumber
SELECT count(DISTINCT arrivalTime), pNumber FROM VisitedTime GROUP BY pNumber

-- Aggregation with Having: List the names and addresses of businesses with total transaction amounts higher than the input x.
SELECT SUM(amount), Business.name, Business.address FROM RecordedTransaction, Business WHERE RecordedTransaction.bid = Business.bid GROUP BY
		 RecordedTransaction.bid, Business.name, Business.address HAVING SUM(amount) >'". $_POST["x"] ."'

-- Nested Aggregation: Return the ID of the business with the highest average transaction amounts.		  
SELECT bid, AVG(amount)
FROM RecordedTransaction
GROUP BY bid
HAVING avg(amount) >=
        ALL (SELECT avg(RT2.amount)
                FROM RecordedTransaction RT2
                GROUP BY RT2.bid)
				
-- Division: List all the businesses visited by a customer
select distinct name from CustomerPartyContact cpc
where not exists (
        select * from Business b
        where not exists (
                select * from VisitedTime vt
                where vt.bid = b.bid and  vt.pNumber = cpc.pNumber
            )
    )			
