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



INSERT INTO user_type (type) 
VALUES (
'admin'
)
INSERT INTO blog_user(first_name,last_name,dob,date_joined,password,email,user_type_id)
VALUES(
    'Ken',
    'Alger',
    '1976/03/12',
    07904362736,
    '2000/12/12',
    2,
    12,
    1,
    null
);
INSERT INTO `category` (`category`) VALUES
('Fiction'),
('Fantasy'),
('Crime'),
('Non Fiction'),
('Romance'),
('Horror'),
('Children’s');

INSERT INTO `content` (`content`) VALUES 
('example blog post');

INSERT INTO `blog` (`title`, `date_created`, `user_id`, `category_id`, `content_id`) VALUES
();

INSERT INTO `movie` (`title`, `release_date`, `director`, `category_id`, `blog_id`) VALUES
('Riders', '2015/06/04', 1, 1, 1),
('Harry Potter and the Philosophers Stone', '2014/09/01', 2, 2, 2),
('Murder on The Oxford Canal', '2017/10/02', 3, 3, 3),
('A History Computing: From Main','2017/04/10', 4, 4, 4),
('Covent Garden in the Snow', '2017/11/16', 5, 5, 5),
('James Bond', '2003/02/01', 1, 1, 6),
('IT', '2004/03/02', 1, 6, 7),
('Green Eggs and Ham', '2005/04/05', 2, 7, 8),
('Pip the Pixie', '2006/05/06', 1, 7, 9),
('Goosebumps', '2007/06/07', 1, 6, 10),
('The Twits', '2008/04/07', 2, 1, 11),
('The Lion the Witch and the Wardrobe', '2009/08/09', 3, 2, 12),
('Peter Rabbit', '2010/09/10', 2, 7, 13),
('50 Shades of Grey', '2011/10/11', 5, 5, 14),
('Alice in Wonderland', '2012/11/12', 1, 2, 15);

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


