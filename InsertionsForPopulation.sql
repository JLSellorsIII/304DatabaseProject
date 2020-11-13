INSERT INTO Business(url, name, capacity,bid, address) VALUES
    ('chuckschocs.ca', 'Chuck''s Chocolates', 30, 0001, '1000 Cocoa Lane');

    INSERT INTO Business(url, name, capacity,bid, address) VALUES
    ('patspies.ca', 'Pat''s Pies', 40, 0002, '2000 Tree Street');

    INSERT INTO Business(url, name, capacity,bid, address) VALUES
    ('bradsbakery.ca', 'Brad''s Bakery', 20, 0003, '1500 Maple Drive');

    INSERT INTO Business(url, name, capacity,bid, address) VALUES
    ('washingtonpizzafactory.com', 'Washington Pizza Factory', 60, 0004, '1400 Pen Boulevard');

    INSERT INTO Business(url, name, capacity,bid, address) VALUES
    ('samssandwiches.ca', 'Sam''s Sandwiches', 45, 0005, '2500 Nathan Lane');

    INSERT INTO Account(email, password) VALUES
    ('bob@uncle.com', 'hunter2');

    INSERT INTO Account(email, password) VALUES
    ('student@ubc.ca', 'hom3work');

    INSERT INTO Account(email, password) VALUES
    ('dark@headprotection.com', '654321');

    INSERT INTO Account(email, password) VALUES
    ('admin@businessname.com', '109!m8x-0kvLwq_EhEUr');

    INSERT INTO Account(email, password) VALUES
    ('customer@gmail.com', 'THisIsmyPassw0rd');

    INSERT INTO Account(email, password) VALUES
    ('official@gov.ca', '_p4ss-W0RD_');


INSERT INTO PerishableConsumables(expirationDate, cid, bid) VALUES
   ('2001-09-11', 0001, 0001);

   INSERT INTO PerishableConsumables(expirationDate, cid, bid) VALUES
   ('2002-06-06', 0002, 0002);

   INSERT INTO PerishableConsumables(expirationDate, cid, bid) VALUES
   ('2023-12-23', 0003, 0003);

   INSERT INTO PerishableConsumables(expirationDate, cid, bid) VALUES
   ('2020-07-30', 0004, 0004);

   INSERT INTO PerishableConsumables(expirationDate, cid, bid) VALUES
   ('2007-07-07', 0005, 0005);

INSERT INTO nonPerishableConsumables(cid, bid) VALUES
    (0006,0001);

    INSERT INTO nonPerishableConsumables(cid, bid) VALUES
    (0007,0002);

    INSERT INTO nonPerishableConsumables(cid, bid) VALUES
    (0008,0003);

    INSERT INTO nonPerishableConsumables(cid, bid) VALUES
    (0009,0004);

    INSERT INTO nonPerishableConsumables(cid, bid) VALUES
    (0010,0005);

INSERT INTO CovidSupplies(quantity,csid,bid) VALUES
    (35,24,0001);

    INSERT INTO CovidSupplies(quantity,csid,bid) VALUES
    (62,42,0002);

    INSERT INTO CovidSupplies(quantity,csid,bid) VALUES
    (100,100,0003);

    INSERT INTO CovidSupplies(quantity,csid,bid) VALUES
    (125,125,0004);

    INSERT INTO CovidSupplies(quantity,csid,bid) VALUES
    (350,240,0005);

INSERT INTO ScheduledShift(shiftID, bid, email, Wage) VALUES
     (0001,0001,'bob@uncle.com', 20.25);


INSERT INTO ScheduledShift(shiftID, bid, email, Wage) VALUES
     (0002, 0002, 'bob@uncle.com', 010.94);


INSERT INTO ScheduledShift(shiftID, bid, email, Wage) VALUES
     (0003, 0003, 'student@ubc.ca', 011.93);


INSERT INTO ScheduledShift(shiftID, bid, email, Wage) VALUES
     (0004, 0002, 'dark@headprotection.com', 000.01);


INSERT INTO ScheduledShift(shiftID, bid, email, Wage) VALUES
     (0005, 0003, 'student@ubc.ca', 011.93);

INSERT INTO ScheduledTime(shiftID, startTime, endTime, duration) VALUES
    (0001, '2020-06-12 12:00:00', '2020-06-12 20:00:00',08.00);

INSERT INTO ScheduledTime(shiftID, startTime, endTime, duration) VALUES
    (0002, '2020-06-12 12:30:00', '2020-06-12 17:00:00', 05.50);

INSERT INTO ScheduledTime(shiftID, startTime, endTime, duration) VALUES
    (0003, '2020-09-12 12:00:00', '2020-06-23 23:15', 11.25);

INSERT INTO ScheduledTime(shiftID, startTime, endTime, duration) VALUES
    (0004, '2020-07-12 08:00:00', '2020-07-12 16:00:00', 08.00);

    INSERT INTO ScheduledTime(shiftID, startTime, endTime, duration) VALUES
    (0001, '2020-06-12 13:00:00', '2020-06-13 01:45:00',12.75);

INSERT INTO RecordedTransaction(tid, bid, amount, transactionDate) VALUES
    (0001, 0001, 00200.00, '2020-07-06 08:00:00');


INSERT INTO RecordedTransaction(tid, bid, amount, transactionDate) VALUES
    (0002, 0001, 10111.05, '2020-07-11 16:00:00');


INSERT INTO RecordedTransaction(tid, bid, amount, transactionDate) VALUES
    (0003, 0005, 00069.42, '2020-12-09 01:01:00');


INSERT INTO RecordedTransaction(tid, bid, amount, transactionDate) VALUES
    (0004, 0003, 01046.00, '2020-12-06 23:59:00');


INSERT INTO RecordedTransaction(tid, bid, amount, transactionDate) VALUES
    (0005, 0002, 00002.50, '2020-12-13 15:30:00');

INSERT INTO VisitedTime(arrivalTime, pNumber, bid, Duration) VALUES
    ('2020-06-12 12:00:00', 16043402230,0001,90);

    INSERT INTO VisitedTime(arrivalTime, pNumber, bid, Duration) VALUES
    ('2020-06-12 12:30:00', 16042902222, 0001, 60);

    INSERT INTO VisitedTime(arrivalTime, pNumber, bid, Duration) VALUES
    ('2020-06-12 11:00:00', 16045552235, 0002, 30);

    INSERT INTO VisitedTime(arrivalTime, pNumber, bid, Duration) VALUES
    ('2020-06-12 11:30:00', 16043400230, 0002, 90);

    INSERT INTO VisitedTime(arrivalTime, pNumber, bid, Duration) VALUES
    ('2020-06-12 12:00:00', 16043402903, 0003, 30);

INSERT INTO VisitedLength(arrivalTime, Duration, endTime) VALUES
    ('2020-06-12 12:00:00', 90, '2020-06-12 13:30:00');

INSERT INTO VisitedLength(arrivalTime, Duration, endTime) VALUES
    ('2020-06-12 12:30:00', 60, '2020-06-12 13:30:00');

INSERT INTO VisitedLength(arrivalTime, Duration, endTime) VALUES
    ('2020-06-12 11:00:00', 30, '2020-06-12 11:30:00');

INSERT INTO VisitedLength(arrivalTime, Duration, endTime) VALUES
    ('2020-06-12 11:30:00', 90, '2020-06-12 13:00:00');

INSERT INTO VisitedLength(arrivalTime, Duration, endTime) VALUES
    ('2020-06-12 12:00:00', 30, '2020-06-12 12:30:00');

INSERT INTO Violation(law, description) VALUES
    ('Overcapacity', 'The business has had more people in the store at one time than they are permitted to');
    INSERT INTO Violation(law, description) VALUES
    ('Extreme Overcapacity', 'The business has had many more people in the store at one time than they are permitted to');

    INSERT INTO Violation(law, description) VALUES
    ('Divider', 'The business is serving customers without a required plexiglass divider');

    INSERT INTO Violation(law, description) VALUES
    ('Cash', 'The business is accepting cash when asked not to');

    INSERT INTO Violation(law, description) VALUES
    ('Provided Masks', 'The business is not providing masks when requiring customers to wear them');

    INSERT INTO Violation(law, description) VALUES
    ('Quarantine', 'Employees who have tested positive have not properly quarantined for 2 weeks');

    INSERT INTO Violation(law, description) VALUES
    ('Social distancing', 'Customers or Employees are not maintaining a 6 feet distance between each other');

    INSERT INTO Violation(law, description) VALUES
    ('Party size', 'The business serves a group that is larger than 6 people');

    INSERT INTO Violation(law, description) VALUES
    ('Mask', 'Staff are not wearing masks while serving customers');

    INSERT INTO Violation(law, description) VALUES
    ('Sanitizer', 'The business is not providing customers with hand sanitizer');

INSERT INTO Warning(law, severity) VALUES
    ('Sanitizer', 1);

    INSERT INTO Warning(law, severity) VALUES
    ('Mask',  2);

    INSERT INTO Warning(law, severity) VALUES
    ('Provided masks', 3);

    INSERT INTO Warning(law, severity) VALUES
    ('Cash', 1)

    INSERT INTO Warning(law, severity) VALUES
    ('Party size', 2);

INSERT INTO Fine(law, amount) VALUES
    ('Overcapacity', 3000);

    INSERT INTO Fine(law, amount) VALUES
    ('Quarantine', 5000);

    INSERT INTO Fine(law, amount) VALUES
    ('Divider', 200);

    INSERT INTO Fine(law, amount) VALUES
    ('Extreme Overcapacity', 10000);

    INSERT INTO Fine(law, amount) VALUES
    ('Social distancing', 1000);

INSERT INTO CustomerPartyContact(pNumber, name) VALUES
    (16043402230, 'Taylor');

    INSERT INTO CustomerPartyContact(pNumber, name) VALUES
    (16042902222, 'Alex');

    INSERT INTO CustomerPartyContact(pNumber, name) VALUES
    (16045552235, 'Jackson');

    INSERT INTO CustomerPartyContact(pNumber, name) VALUES
    (16043400230, 'Ally');

    INSERT INTO CustomerPartyContact(pNumber, name) VALUES
    (16043402903, 'Sal');

INSERT INTO Accesses(email, bid, writePermission) VALUES
    ('@uncle.com', 0001,1);

    INSERT INTO Accesses(email, bid, writePermission) VALUES
    ('student@ubc.ca', 0002,0);

    INSERT INTO Accesses(email, bid, writePermission) VALUES
    ('dark@headprotection.com', 0003, 0);

    INSERT INTO Accesses(email, bid, writePermission) VALUES
    ('admin@businessname.com', 0004, 1);

    INSERT INTO Accesses(email, bid, writePermission) VALUES
    ('customer@gmail.com', 0005, 0);

    INSERT INTO Accesses(email, bid, writePermission) VALUES
    ('official@gov.ca', 0005, 1);

INSERT INTO TracksDate(bid, email, law, violationDate) VALUES
    (0001, 'official@gov.ca', 'Sanitizer', '07-jul-2020');

    INSERT INTO TracksDate(bid, email, law, violationDate) VALUES
    (0002, 'bob@uncle.com', 'Extreme Overcapacity', '21-jun-2021');

    INSERT INTO TracksDate(bid, email, law, violationDate) VALUES
    (0002, 'bob@uncle.com', 'Divider', '06-aug-2020');

    INSERT INTO TracksDate(bid, email, law, violationDate) VALUES
    (0003, 'official@gov.ca', 'Mask', '09-dec-2020');

    INSERT INTO TracksDate(bid, email, law, violationDate) VALUES
    (0001, 'official@gov.ca', 'Sanitizer', '07-oct-2020');

INSERT INTO TracksPaid(bid,email,law,paid) VALUES
    (0001, 'bob@uncle.com', 'Divider', 1);

    INSERT INTO TracksPaid(bid,email,law,paid) VALUES
    (0002, 'bob@uncle.com', 'Extreme Overcapacity', 0);

    INSERT INTO TracksPaid(bid,email,law,paid) VALUES
    (0002, 'bob@uncle.com', 'Divider', 1);

    INSERT INTO TracksPaid(bid,email,law,paid) VALUES
    (0003, 'official@gov.ca', 'Mask', NULL);

    INSERT INTO TracksPaid(bid,email,law,paid) VALUES
    (0001, 'official@gov.ca', 'Sanitizer', NULL);