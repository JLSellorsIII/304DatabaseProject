INSERT INTO Business(url, name, capacity,bid, address) VALUES
    ('chuckschocs.ca', 'Chuck’s Chocolates', 30, 0001, '1000 Cocoa Lane'),
    ('patspies.ca', 'Pat’s Pies', 40, 0002, '2000 Tree Street'),
    ('bradsbakery.ca', 'Brad’s Bakery', 20, 0003, '1500 Maple Drive'),
    ('washingtonpizzafactory.com', 'Washington Pizza Factory', 60, 0004, '1400 Pen Boulevard'),
    ('samssandwiches.ca', 'Sam’s Sandwiches', 45, 0005, '2500 Nathan Lane');


INSERT INTO PerishablesConsumables(expirationDate, cid, bid) VALUES
   (2021-09-11, 0001, 0001),
   (2021-07-06, 0002, 0002),
   (2022-08-23, 0003, 0003),
   (2094-06-30, 0004, 0004),
   (2020-07-07, 0005, 0005);

INSERT INTO nonPerishableConsumables(cid, bid) VALUES
    (0006,0001),
    (0007,0002),
    (0008,0003),
    (0009,0004),
    (0010,0005);

INSERT INTO CovidSupplies(quantity,csid,bid) VALUES
    (35,24,0001),
    (62,42,0002),
    (100,100,0003),
    (125,125,0004),
    (350,240,0005);

INSERT INTO ScheduledShift(shiftID, bid, email, Wage) VALUES
     (0001,0001,'bob@uncle.com', 20.25),
     (0002, 0002, 'bob@uncle.com',10.94),
     (0003, 0003, 'student@ubc.ca',11.93),
     (0004, 0002, 'dark@headprotection.com', 00.01),
     (0005, 0003, 'student@ubc.ca', 11.93);

INSERT INTO ScheduledTime(shiftID, startTime, endTime, duration) VALUES
    (0001,'2020-06-12 12:00:00','2020-06-12 20:00:00',08.00),
    (0002, '2020-06-12 12:30:00', '2020-06-12 17:00:00', 05.50),
    (0003, '2020-09-12 12:00:00', '2020-06-23 23:15',11.25),
    (0004, '2020-07-12 08:00:00', '2020-07-12 16:00:00', 08.00),
    (0001, '2020-06-12 13:00:00', '2020-06-13 01:45:00',12.75);

INSERT INTO RecordedTransaction(tid, bid, amount, date) VALUES
    (0001, 0001, 00200.00, '2020-07-06 08:00:00'),
    (0002, 0001, 10111.05, '2020-07-13 16:00:00'),
    (0003, 0005, 00069.42, '2020-12-13 01:01:00'),
    (0004, 0003, 01046.00, '2020-12-13 23:59:00'),
    (0005, 0002, 00002.50, '2020-12-1315:30:00');

INSERT INTO VisitedLength(Time, pNumber, bid, Duration) VALUES
    ('2020-06-12 12:00:00', 16043402230,0001,90),
    ('2020-06-12 12:30:00', 16042902222, 0001, 60),
    ('2020-06-12 11:00:00', 16045552235, 0002, 30),
    ('2020-06-12 11:30:00', 16043400230, 0002, 90),
    ('2020-06-12 12:00:00', 16043402903, 0003, 30);

INSERT INTO VisitedTime(Time, pNumber,bid, Duration) VALUES
    ('2020-06-12 12:00:00', 90, '2020-06-12 13:30:00'),
    ('2020-06-12 12:30:00', 60, '2020-06-12 13:30:00'),
    ('2020-06-12 11:00:00', 30, '2020-06-12 11:30:00'),
    ('2020-06-12 11:30:00', 90, '2020-06-12 13:00:00'),
    ('2020-06-12 12:00:00', 30, '2020-06-12 12:30:00');

INSERT INTO Violation(law, description) VALUES
    ('Overcapacity', 'The business has had more people in the store at one time than they are permitted to'),
    ('Extreme Overcapacity', 'The business has had many more people in the store at one time than they are permitted to'),
    ('Divider', 'The business is serving customers without a required plexiglass divider'),
    ('Cash', 'The business is accepting cash when asked not to'),
    ('Provided Masks', 'The business is not providing masks when requiring customers to wear them'),
    ('Quarantine', 'Employees who have tested positive have not properly quarantined for 2 weeks'),
    ('Social distancing', 'Customers or Employees are not maintaining a 6 feet distance between each other'),
    ('Party size', 'The business serves a group that is larger than 6 people'),
    ('Mask', 'Staff are not wearing masks while serving customers'),
    ('Sanitizer', 'The business is not providing customers with hand sanitizer');

INSERT INTO Warning(law, level) VALUES
    ('Sanitizer', 1),
    ('Mask',2),
    ('Provided masks',3),
    ('Cash',1),
    ('Party size', 2);

INSERT INTO Fine(law, amount) VALUES
    ('Overcapacity', 3000),
    ('Quarantine', 5000),
    ('Divider', 200),
    ('Extreme Overcapacity', 10000),
    ('Social distancing', 1000);

INSERT INTO CustomerPartyContact(pNumber, name) VALUES
    (16043402230, 'Taylor'),
    (16042902222, 'Alex'),
    (16045552235, 'Jackson'),
    (16043400230, 'Ally'),
    (16043402903, 'Sal');

INSERT INTO Account(email, password) VALUES
    ('bob@uncle.com', 'hunter2'),
    ('student@ubc.ca', 'hom3work'),
    ('dark@headprotection.com', '654321'),
    ('admin@businessname.com', '1;09!m8x-0k.vLwq_EhEU.r'),
    ('customer@gmail.com', 'THisIsmyPassw0rd'),
    ('official@gov.ca', '_p4ss-W0RD_');

INSERT INTO Accesses(email, bid, writePermission) VALUES
    ('@uncle.com',0001,1),
    ('student@ubc.ca',0002,0),
    ('dark@headprotection.com',0003, 0),
    ('admin@businessname.com',0004,1),
    ('customer@gmail.com',0005, 0),
    ('official@gov.ca',0005, 1);

INSERT INTO TracksDate(bid, email, law, paid, date) VALUES
    (0001, 'official@gov.ca', 'Sanitizer', '2020-07-07'),
    (0002, 'bob@uncle.com', 'Extreme Overcapacity', '2020-06-21'),
    (0002, 'bob@uncle.com', 'Divider', '2020-05-06'),
    (0003, 'official@gov.ca', 'Mask', '2020-06-06'),
    (0001, 'official@gov.ca', 'Sanitizer', '2020-07-10');

INSERT INTO TracksPaid(bid,email,law,paid) VALUES
    (0001, 'bob@uncle.com', 'Divider', 1),
    (0002, 'bob@uncle.com', 'Extreme Overcapacity', 0),
    (0002, 'bob@uncle.com', 'Divider', 1),
    (0003, 'official@gov.ca', 'Mask', NULL),
    (0001, 'official@gov.ca', 'Sanitizer', NULL);








