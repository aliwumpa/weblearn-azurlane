CREATE TABLE 'webazurlane'.'data_user_comment' (
	'userID' int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	'userNm' VARCHAR(25) NOT NULL,
	'profile_img' VARCHAR(255) NOT NULL,
) ENGINE = InnoDB;
	
CREATE TABLE `webazurlane`.`data_comment` ( 
	`comment_ID` INT NOT NULL , 
	`comment` TEXT NOT NULL , 
	`userID` INT(20) NOT NULL , 
	PRIMARY KEY (`comment_ID`)) 
ENGINE = InnoDB;