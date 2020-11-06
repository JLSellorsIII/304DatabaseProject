INSERT INTO Business(url, name, capacity,bid, address) VALUES
    ("chuckschocs.ca", "Chuck’s Chocolates", 30, 0001, "1000 Cocoa Lane"),
    ("patspies.ca", "Pat’s Pies", 40, 0002, "2000 Tree Street"),
    ("bradsbakery.ca", "Brad’s Bakery", 20, 0003, "1500 Maple Drive"),
    ("washingtonpizzafactory.com", "Washington Pizza Factory", 60, 0004, "1400 Pen Boulevard"),
    ("samssandwiches.ca", "Sam’s Sandwiches", 45, 0005, "2500 Nathan Lane");

INSERT INTO Consumables(quantity, cid, bid) VALUES
    (2,0002,0001),
    (40,0003,0002),
    (21,0004,0003),
    (100,0005,0004),
    (604,0001,0005),
    (2,0006,0001),
    (40,0007,0002),
    (21,0008,0003),
    (100,0009,0005),
    (604,0010,0001);

INSERT INTO Perishables(expirationDate, cid, bid) VALUES
   (2021-09-11, 0001, 0001),
   (2021-07-06, 0002, 0002),
   (2022-08-23, 0003, 0003),
   (2094-06-30, 0004, 0004),
   (2020-07-07, 0005, 0005);

INSERT INTO nonPerishables(cid, bid) VALUES
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
     (0001,0001,"bob@uncle.com", 20.25),
     (0002, 0002, "bob@uncle.com", 10.94),
     (0003, 0003, "student@ubc.ca", 11.93),
     (0004, 0002, "dark@headprotection.com", 00.01),
     (0005, 0003, "student@ubc.ca", 11.93);

INSERT INTO ScheduledTime(shiftID, startTime, endTime, duration) VALUES
    (0001,2020-06-12 12:00:00,2020-06-12 20:00:00,08.00),
    (0002, 2020-06-12 12:30:00, 2020-06-12 17:00:00, 05.50),
    (0003, 2020-09-12 12:00:00, 2020-06-23 23:15,11.25),
    (0004, 2020-07-12 08:00:00, 2020-07-12 16:00:00, 08.00),
    (0001, 2020-06-12 13:00:00, 2020-06-13 01:45:00,12.75);

INSERT INTO RecordedTransaction(tid, bid, amount, date) VALUES
    (0001, 0001, 00200.00, 2020-07-06 08:00:00),
    (0002, 0001, 10111.05, 2020-07-13 16:00:00),
    (0003, 0005, 00069.42, 2020-12-13 01:01:00),
    (0004, 0003, 01046.00, 2020-12-13 23:59:00),
    (0005, 0002, 00002.50, 2020-12-1315:30:00);




