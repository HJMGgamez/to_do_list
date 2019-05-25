CREATE DATABASE IF NOT EXISTS `ToDoList` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ToDoList`;

DROP TABLE IF EXISTS `list`;
CREATE TABLE IF NOT EXISTS `list` (
	`list_id` int(11) NOT NULL AUTO_INCREMENT,
	`list_name` varchar(50) DEFAULT NULL,
	PRIMARY KEY (`list_id`)
);


DROP TABLE IF EXISTS `list_entry`;
CREATE TABLE IF NOT EXISTS `list_entry` (
	`entry_id` int(11) NOT NULL AUTO_INCREMENT,
	`list_id` int(11) DEFAULT NULL,
	`text` text,
	`status` varchar(50) DEFAULT NULL,
	PRIMARY KEY (`entry_id`),
  FOREIGN KEY (`list_id`) REFERENCES `list`(`list_id`)
);
