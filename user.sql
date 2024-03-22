-- Database name :- database1

CREATE TABLE IF NOT EXISTS `login`(
    `username` VARCHAR(30),
    `password` VARCHAR(30)
);

INSERT INTO `login` (`username`, `password`) VALUES ('admin', 'admin111');