
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- rule_sets
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `rule_sets`;


CREATE TABLE `rule_sets`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`active` TINYINT  NOT NULL,
	`registration` VARCHAR(64)  NOT NULL,
	`login` VARCHAR(64)  NOT NULL,
	`created_at` DATETIME  NOT NULL,
	`modified_at` DATETIME  NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- invitations
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `invitations`;


CREATE TABLE `invitations`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`email` VARCHAR(255)  NOT NULL,
	`first_name` VARCHAR(64),
	`last_name` VARCHAR(64),
	`hash` VARCHAR(255),
	`redeemed` TINYINT  NOT NULL,
	`created_at` DATETIME  NOT NULL,
	`modified_at` DATETIME  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `invitations_FI_1` (`user_id`),
	CONSTRAINT `invitations_FK_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- users
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `users`;


CREATE TABLE `users`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(255)  NOT NULL,
	`password` VARCHAR(255)  NOT NULL,
	`verified` TINYINT  NOT NULL,
	`active` TINYINT  NOT NULL,
	`terms_accepted` TINYINT  NOT NULL,
	`created_at` DATETIME  NOT NULL,
	`modified_at` DATETIME  NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- profiles
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `profiles`;


CREATE TABLE `profiles`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`salutation` VARCHAR(64),
	`first_name` VARCHAR(64),
	`last_name` VARCHAR(64),
	`gender` CHAR(1),
	`address1` VARCHAR(255),
	`address2` VARCHAR(255),
	`city` VARCHAR(64),
	`state` VARCHAR(64),
	`country` VARCHAR(64),
	`postcode` VARCHAR(64),
	`phone` VARCHAR(64),
	`fax` VARCHAR(64),
	`email` VARCHAR(255),
	`url` VARCHAR(255),
	`created_at` DATETIME  NOT NULL,
	`modified_at` DATETIME  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `profiles_FI_1` (`user_id`),
	CONSTRAINT `profiles_FK_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- preferences
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `preferences`;


CREATE TABLE `preferences`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`created_at` DATETIME  NOT NULL,
	`modified_at` DATETIME  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `preferences_FI_1` (`user_id`),
	CONSTRAINT `preferences_FK_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- districts
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `districts`;


CREATE TABLE `districts`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`address1` VARCHAR(255),
	`address2` VARCHAR(255),
	`city` VARCHAR(64),
	`state` VARCHAR(64),
	`country` VARCHAR(64),
	`postcode` VARCHAR(64),
	`phone` VARCHAR(64),
	`fax` VARCHAR(64),
	`email` VARCHAR(255),
	`url` VARCHAR(255),
	`created_at` DATETIME  NOT NULL,
	`modified_at` DATETIME  NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- schools
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `schools`;


CREATE TABLE `schools`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`district_id` INTEGER  NOT NULL,
	`name` VARCHAR(255)  NOT NULL,
	`address1` VARCHAR(255),
	`address2` VARCHAR(255),
	`city` VARCHAR(64),
	`state` VARCHAR(64),
	`country` VARCHAR(64),
	`postcode` VARCHAR(64),
	`phone` VARCHAR(64),
	`fax` VARCHAR(64),
	`email` VARCHAR(255),
	`url` VARCHAR(255),
	`established` DATE,
	`population` INTEGER,
	`population_date` DATE,
	`faculty` INTEGER,
	`faculty_date` DATE,
	`class_size` INTEGER,
	`class_size_date` INTEGER,
	`active` TINYINT default 0 NOT NULL,
	`elementary` TINYINT default 0 NOT NULL,
	`middle` TINYINT default 0 NOT NULL,
	`secondary` TINYINT default 0 NOT NULL,
	`alternative` TINYINT default 0 NOT NULL,
	`public_school` TINYINT default 0 NOT NULL,
	`private_school` TINYINT default 0 NOT NULL,
	`parochial` TINYINT default 0 NOT NULL,
	`indian_affairs` TINYINT default 0 NOT NULL,
	`independent` TINYINT default 0 NOT NULL,
	`magnet` TINYINT default 0 NOT NULL,
	`charter` TINYINT default 0 NOT NULL,
	`grade_min` VARCHAR(64),
	`grade_max` VARCHAR(64),
	`created_at` DATETIME  NOT NULL,
	`modified_at` DATETIME  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `schools_FI_1` (`district_id`),
	CONSTRAINT `schools_FK_1` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- nominations
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nominations`;


CREATE TABLE `nominations`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`school_id` INTEGER  NOT NULL,
	`salutation` VARCHAR(64),
	`first_name` VARCHAR(64),
	`last_name` VARCHAR(64),
	`gender` CHAR(64),
	`subject` VARCHAR(64),
	`grade_level` VARCHAR(64),
	`story` LONGBLOB,
	`posthumous` TINYINT default 0 NOT NULL,
	`featured` TINYINT default 0 NOT NULL,
	`paid` TINYINT default 0 NOT NULL,
	`created_at` DATETIME  NOT NULL,
	`modified_at` DATETIME  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `nominations_FI_1` (`school_id`),
	CONSTRAINT `nominations_FK_1` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- unions
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `unions`;


CREATE TABLE `unions`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`address1` VARCHAR(255),
	`address2` VARCHAR(255),
	`city` VARCHAR(64),
	`state` VARCHAR(64),
	`country` VARCHAR(64),
	`postcode` VARCHAR(64),
	`phone` VARCHAR(64),
	`fax` VARCHAR(64),
	`email` VARCHAR(255),
	`url` VARCHAR(255),
	`members` INTEGER,
	`established` DATE,
	`created_at` DATETIME  NOT NULL,
	`modified_at` DATETIME  NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
