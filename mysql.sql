CREATE DATABASE login_credentials;

CREATE TABLE `login_credentials`.`login`
(
`id` INT(11) NOT NULL AUTO_INCREMENT ,
`username` VARCHAR(50) NOT NULL ,
`password` VARCHAR(50) NOT NULL ,
PRIMARY KEY (`id`)
)ENGINE = InnoDB;

INSERT INTO `login` (`id`, `username`, `password`) VALUES ('1', 'helloworld', 'testing123');
