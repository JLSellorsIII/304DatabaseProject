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

-- TODO: Needs to be fixed (null values);
-- INSERT INTO RecordedTransaction(tid, bid, amount, transactionDate) VALUES ('1234', '', '300', '1970-01-01 00:00:00');

INSERT INTO Account(email, password) VALUES ('test@email.com', 'password');

-- TODO: Fix addCovidSupplies

-- TODO: Fix NonPerishable
--
-- TODO: Fix Perishable
