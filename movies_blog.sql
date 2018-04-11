DROP DATABASE IF EXISTS movies_blog;
CREATE DATABASE movies_blog;

CREATE TABLE user_type(ID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    	       type VARCHAR(30	) not null
) ENGINE = INNODB;

CREATE TABLE blog_user( ID integer not null PRIMARY KEY AUTO_INCREMENT,
                   first_name varchar(20) not null,
                   last_name varchar(30) not null,
                   dob date not null,
                   date_joined date not null,
                   password varchar(15) not null,
                   email varchar(80) not null,
                   user_type_id int not null,
                   FOREIGN KEY (user_type_id) REFERENCES user_type(ID)
) ENGINE=INNODB;


CREATE TABLE category ( ID integer not null PRIMARY KEY AUTO_INCREMENT,
               category varchar(30)
) ENGINE=INNODB;

CREATE TABLE content ( ID integer not null PRIMARY KEY AUTO_INCREMENT,
               content longtext not null
) ENGINE=INNODB;

CREATE TABLE blog ( ID integer not null PRIMARY KEY AUTO_INCREMENT,
               title date not null,
               date_created date,
	       user_id int,
	       category_id int,
               content_id int,
               FOREIGN KEY (content_id) REFERENCES content(ID),
	       FOREIGN KEY (user_id) REFERENCES blog_user(ID),
	       FOREIGN KEY (category_id) REFERENCES category(ID)
) ENGINE=INNODB;
CREATE TABLE movie ( ID integer not null PRIMARY KEY AUTO_INCREMENT,
               title varchar(50) not null,
               release_date date,
               director varchar(80),
	       category_id int not null,
	       blog_id int,
	       FOREIGN KEY (category_id) REFERENCES category(ID),
	       FOREIGN KEY (blog_id) REFERENCES blog(ID)
) ENGINE=INNODB;



-- INSERT INTO `category` (`category`) VALUES
-- ('Fiction'),
-- ('Fantasy'),
-- ('Crime'),
-- ('Non Fiction'),
-- ('Romance'),
-- ('Horror'),
-- ('Children’s');
-- 
-- INSERT INTO `author` (`first_name`, `middle_name`, `last_name`) VALUES
-- ('Jilly', null, 'Cooper'),
-- ('Joanne', 'Kathleen', 'Rowling'),
-- ('Faith', null, 'Martin'),
-- ('Mr David', 'Daniel', 'Wertman'),
-- ('Jules', null, 'Wake'),
-- ('Ian', 'Lancaster', 'Fleming'),
-- ('Stephen', 'Edwin', 'King'),
-- ('Dr', null, 'Seuss'),
-- ('Enid', null, 'Blyton'),
-- ('Robert', 'Lawrence', 'Stine'),
-- ('Roald', null, 'Dahl'),
-- ('Clive', 'Staples', 'Lewis'),
-- ('Helen', 'Beatrix', 'Potter'),
-- ('Erika', null, 'Mitchell'),
-- ('Lewis', null, 'Carroll');
-- 
-- INSERT INTO `book` (`title`, `publish_date`, `copies`, `category_id`, `author_id`) VALUES
-- ('Riders', '2015/06/04', 1, 1, 1),
-- ('Harry Potter and the Philosophers Stone', '2014/09/01', 2, 2, 2),
-- ('Murder on The Oxford Canal', '2017/10/02', 3, 3, 3),
-- ('A History Computing: From Main','2017/04/10', 4, 4, 4),
-- ('Covent Garden in the Snow', '2017/11/16', 5, 5, 5),
-- ('James Bond', '2003/02/01', 1, 1, 6),
-- ('IT', '2004/03/02', 1, 6, 7),
-- ('Green Eggs and Ham', '2005/04/05', 2, 7, 8),
-- ('Pip the Pixie', '2006/05/06', 1, 7, 9),
-- ('Goosebumps', '2007/06/07', 1, 6, 10),
-- ('The Twits', '2008/04/07', 2, 1, 11),
-- ('The Lion the Witch and the Wardrobe', '2009/08/09', 3, 2, 12),
-- ('Peter Rabbit', '2010/09/10', 2, 7, 13),
-- ('50 Shades of Grey', '2011/10/11', 5, 5, 14),
-- ('Alice in Wonderland', '2012/11/12', 1, 2, 15);
-- 
-- INSERT INTO `login`( `username`, `password`) VALUES
--  ('kenalger','password123'),
-- ('abrambennet','food'),
-- ('adaalger','pastapizza'),
-- ('georgealger', 'bottle'),
-- ('barbarahedley', 'laptop'),
-- ('kiarracornett', 'notebook'),
-- ('bencory', 'clocksrule'),
-- ('helenfurness', 'troy'),
-- ('helenderby','stesichorus4eva'),
-- ('jenniferdenman','shialaboef'),
-- ('jacobeliot', 'snowtracks'),
-- ('olivergiles','bottle3'),
-- ('oliverhawk', 'umbrastaff'),
-- ('anitaheyley', 'sense8'),
-- ('liaelliot', 'fromtv');
-- 
-- INSERT INTO user_type (type) 
-- VALUES (
-- 'member'
-- ),(
-- 'librarian'
-- );
-- 
-- INSERT INTO address(
--     first_line,
--     city,
--     county,
--     post_code)
-- VALUES(
--     '27 London Road',
--     'Watford',
--     'Hertfordshire',
--     'WD11 4AR'
-- ),(
--     '123 Brick Road',
--     'Watford',
--     'Hertfordshire',
--     'WD07 9ES'
-- ),(
--     '98 Crock Ave',
--     'Hemel Hempstead',
--     'Hertfordshire',
--     'HP2 3FG'
-- ),(
--     '2 Luton Road',
--     'Hemel Hempsted',
--     'Hertfordshire',
--     'HP1 4AR'
-- ),(
--     '43 Aprley Road',
--     'Hemel Hempstead',
--     'Hertfordshire',
--     'HP2 7AA'
-- ),(
--     '15 West Street',
--     'Watford',
--     'Hertfordshire',
--     'WD04 4LR'
-- ),(
--     '123 London Road',
--     'St Albans',
--     'Hertfordshire',
--     'AL1 4AE'
-- ),(
--     '1 Dell Rise',
--     'St Albans',
--     'Hertfordshire',
--     'AL3 9FG'
-- ),(
--     '46 Cottonmill Lane',
--     'St Albans',
--     'Hertfordshire',
--     'AL1 6SA'
-- ),(
--     '39 Riverside Road',
--     'St Albans',
--     'Hertfordshire',
--     'AL2 5BB'
-- ),(
--     '166 The Parade',
--     'Watford',
--     'Hertfordshire',
--     'WD7 4AE'
-- ),(
--     '11 Clock Road',
--     'Watford',
--     'Hertfordshire',
--     'WD8 7DC'
-- ),(
--     '16 Clock Road',
--     'Watford',
--     'Hertfordshire',
--     'WD8 4AE'
-- ),(
--     '139 London Road',
--     'St Albans',
--     'Hertfordshire',
--     'AL1 5RF'
-- );
-- 
-- DELETE FROM library_user;
-- ALTER TABLE library_user AUTO_INCREMENT=65;
-- INSERT INTO library_user(
--     first_name,
--     last_name,
--     dob,
--     phone,
--     date_joined,
--     login_id,
--     address_id,
--     user_type_id,
--     family_adult_id
-- )
-- VALUES(
--     'Ken',
--     'Alger',
--     '1976/03/12',
--     07904362736,
--     '2000/12/12',
--     2,
--     12,
--     1,
--     null
-- ),(
--     'Abram',
--     'Bennet',
--     '1956/08/22',
--     07944562745,
--     '1998/02/02',
--     1,
--     4,
--     1,
--     null
-- ),(
--     'Ada',
--     'Alger',
--     '2003/11/05',
--     07904362736,
--     '2000/12/12',
--     3,
--     12,
--     1,
--     65
-- ),(
--     'George',
--     'Alger',
--     '2008/06/08',
--     07904362736,
--     '2000/12/12',
--     4,
--     12,
--     1,
--     65
-- ),(
--     'Barbara',
--     'Hedley',
--     '1980/10/25',
--     07900352674,
--     '2010/10/28',
--     7,
--     10,
--     2,
--     null
-- ),(
--     'Kiarra',
--     'Cornett',
--     '1975/03/11',
--     07904679736,
--     '2016/02/16',
--     10,
--     1,
--     2,
--     null
-- ),(
--     'Helen',
--     'Furness',
--     '1991/10/16',
--     07956762736,
--     '2000/11/06',
--     12,
--     1,
--     1,
--     null
-- ),(
--     'Ben',
--     'Cory',
--     '1989/08/27',
--     07904365678,
--     '2016/07/12',
--     8,
--     5,
--     1,
--     null
-- ),(
--     'Jennifer',
--     'Denman',
--     '1970/03/17',
--     07904365456,
--     '2010/05/19',
--     5,
--     9,
--     2,
--     null
-- ),(
--     'Helen',
--     'Derby',
--     '1987/12/22',
--     07953637483,
--     '2015/08/17',
--     11,
--     2,
--     1,
--     null
-- ),(
--     'Jacob',
--     'Elliot',
--     '2000/11/07',
--     017275635365,
--     '2009/10/12',
--     6,
--     6,
--     1,
--     null
-- ),(
--     'Oliver',
--     'Giles',
--     '1969/04/21',
--     079043634478,
--     '1989/07/20',
--     9,
--     3,
--     1,
--     null
-- ),(
--     'Anita',
--     'Heyley',
--     '1974/09/14',
--     01727894567,
--     '2003/04/19',
--     13,
--     7,
--     1,
--     null
-- ),(
--     'Lia',
--     'Elliot',
--     '1977/11/09',
--     078905635365,
--     '1988/02/11',
--     14,
--     11,
--     1,
--     null
-- ),(
--     'Oliver',
--     'Hawk',
--     '2002/08/05',
--     07904365673,
--     '2010/06/22',
--     15,
--     8,
--     1,
--     null
-- );
-- 
-- INSERT INTO `borrowing`(`borrow_date`, `due_date`, `return_date`, `fine`, `user_id`, `book_id`) VALUES 
-- ('2018-01-13',NULL,'2018-02-10', 'NULL', '65', '1'),
-- ('2018-01-16',NULL, '2018-02-01', NULL, '66', '2'),
-- ('2018-01-12',NULL, '2018-02-16', NULL, '67','3'), 
-- ('2018-01-18',NULL, '2018-01-23', NULL, '68', '4'),
-- ('2018-01-20',NULL, '2018-02-13', NULL, '69', '5'),
-- ('2018-01-21', NULL, '2018-01-20', NULL, '70', '6');
-- 
-- 
-- DELIMITER //
-- CREATE PROCEDURE list_borrowed_books()
-- BEGIN
-- SELECT bk.title,' ', u.first_name,' ', u.last_name  FROM library_user AS u, borrowing AS b, book as bk WHERE b.user_id=u.ID and b.book_id = bk.ID; 
-- END //
-- DELIMITER ;
-- 
-- DELIMITER //
-- CREATE PROCEDURE find_book_by_author(IN name varchar(20), IN middlename varchar(20), IN surname varchar(30))
-- BEGIN
-- SELECT bk.title, bk.publish_date, bk.copies, bk.author_id, aut.first_name, aut.middle_name, aut.last_name
-- FROM (book AS bk
-- INNER JOIN author as aut ON aut.id=bk.author_id)
-- WHERE aut.first_name=name OR aut.middle_name= middlename OR aut.last_name = surname;
-- END //
-- DELIMITER ;
-- 
-- DELIMITER //
-- CREATE PROCEDURE borrowedBooksByUser (IN name varchar(20), IN surname varchar(30))
-- BEGIN
-- SELECT bk.title, br.due_date, br.fine 
-- FROM ((borrowing AS br 
-- INNER JOIN library_user as u ON u.id=br.user_id)
-- INNER JOIN book as bk ON bk.ID = br.book_id) WHERE u.first_name=name AND u.last_name = surname;
-- END //
-- DELIMITER ;
-- 
-- DELIMITER //
-- CREATE PROCEDURE dueDate (IN borrowedDate date, IN usrID integer, OUT due date)
-- BEGIN
-- SET due = DATE_ADD(borrowedDate, INTERVAL 10 DAY);
-- UPDATE borrowing SET due_date =due WHERE user_id=usrID and borrow_date=borrowedDate;
-- END //
-- DELIMITER ;
-- 
-- 
-- CALL list_borrowed_books();
-- CALL find_book_by_author('Joanne', 'Kathleen', 'Rowling');
-- CALL borrowedBooksByUser('Abram', 'Bennet');
-- CALL dueDate('2018-01-18', 68, @due);
-- CALL dueDate('2018-01-13', 65, @due);
-- CALL dueDate('2018-01-16', 66, @due);
-- CALL dueDate('2018-01-12', 67, @due);
-- CALL dueDate('2018-01-20', 69, @due);
-- CALL dueDate('2018-01-21', 70, @due);


