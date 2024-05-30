-- Database name :- database1

CREATE TABLE IF NOT EXISTS `login`(
    `desig` VARCHAR(10),
    `name` VARCHAR(30),
    `dept` VARCHAR(30),
    `username` VARCHAR(30),
    `password` VARCHAR(30)
);

INSERT INTO `login` (`desig`,`name`,`dept`,`username`, `password`) VALUES ('Principle','Dr Vivek Kapoor','Ghriet','admin', 'admin111');
INSERT INTO `login` (`desig`,`name`,`dept`,`username`, `password`) VALUES ('HOD','Sudhir Juare','Management','sudhir', 'sudhir11');
INSERT INTO `login` (`desig`,`name`,`dept`,`username`, `password`) VALUES ('Faculty','Dr. Dhiraj Shembekar','Management','dhiraj', 'dhiraj11');

CREATE TABLE  IF NOT EXISTS `activity` (
    `name` VARCHAR(30),
    `description` TEXT,
    `datefrom` DATE,
    `dateto`  DATE,
    `place` VARCHAR(30),
    `time` TIME,
    `orgby` VARCHAR(30),
    `approval` VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS `requirement`(
    `eventname`  VARCHAR(30),
    `ground` VARCHAR(3),
    `sport` VARCHAR(3),
    `auditorium` VARCHAR(3),
    `sound` VARCHAR(3),
    `photo` VARCHAR(3),
    `video` VARCHAR(3),
    `from` DATE,
    `to`    DATE
);


CREATE TABLE IF NOT EXISTS `budget`(
    `eventname` VARCHAR(30),
    `particular`  VARCHAR(30),
    `amount` DECIMAL,
    `qty`  INT,
    `total` DECIMAL
);
