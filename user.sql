-- Database name :- database1

CREATE TABLE IF NOT EXISTS `login`(
    `desig` VARCHAR(10),
    `name` VARCHAR(30),
    `dept` VARCHAR(30),
    `username` VARCHAR(30),
    `password` VARCHAR(30)
);

INSERT INTO `login` (`name`,`dept`,`username`, `password`) VALUES ('Principle','Dr Vivek Kapoor','Ghriet','admin', 'admin111');
