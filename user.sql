-- Database name :- database1

CREATE TABLE IF NOT EXISTS `login`(
    `name` VARCHAR(30),
    `dept` VARCHAR(30),
    `username` VARCHAR(30),
    `password` VARCHAR(30)
);

INSERT INTO `login` (`name`,`dept`,`username`, `password`) VALUES ('Dr Vivek Kapoor','Ghriet','admin', 'admin111');
