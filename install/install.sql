CREATE TABLE IF NOT EXISTS `todaysquotes_settings`(
    `idx` INT(100) NOT NULL AUTO_INCREMENT,
    `seq` INT(100) NOT NULL,
    `title` VARCHAR(250) NOT NULL,
    `display` VARCHAR(250),
    PRIMARY KEY  (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
