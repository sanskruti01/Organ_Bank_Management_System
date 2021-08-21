-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8mb4 ;
-- -----------------------------------------------------
-- Schema phpmyadmin
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema test
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema mypro
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mypro
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mypro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`login` (
  `sr_no` INT(11) NOT NULL,
  `user` VARCHAR(30) NOT NULL,
  `password` VARCHAR(30) NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

USE `mypro` ;

-- -----------------------------------------------------
-- Table `mypro`.`address`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `address` (
  `address_id` VARCHAR(10) NOT NULL,
  `house_name` VARCHAR(45) NULL DEFAULT NULL,
  `society_name` VARCHAR(45) NULL DEFAULT NULL,
  `city` VARCHAR(45) NULL DEFAULT NULL,
  `pincode` INT NULL DEFAULT NULL,
  `state` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`address_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `mypro`.`camp`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`camp` (
  `camp_id` VARCHAR(8) NOT NULL,
  `camp_date` DATE NULL DEFAULT NULL,
  `place` VARCHAR(45) NULL DEFAULT NULL,
  `total_donors` INT NULL DEFAULT NULL,
  `total_organ_donated` INT NULL DEFAULT NULL,
  PRIMARY KEY (`camp_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `mypro`.`ins_address`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`ins_address` (
  `ins_add_id` VARCHAR(10) NOT NULL,
  `area` VARCHAR(45) NULL DEFAULT NULL,
  `road` VARCHAR(45) NULL DEFAULT NULL,
  `city` VARCHAR(20) NULL DEFAULT NULL,
  `pincode` INT NULL DEFAULT NULL,
  `state` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`ins_add_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `mypro`.`coordinators`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`coordinators` (
  `ins_id` VARCHAR(10) NOT NULL,
  `ins_name` VARCHAR(45) NULL DEFAULT NULL,
  `adress_id` VARCHAR(10) NULL DEFAULT NULL,
  `contact_no1` VARCHAR(10) NULL DEFAULT NULL,
  `contact_no2` VARCHAR(10) NULL DEFAULT NULL,
  `dis_from_bank` FLOAT NULL DEFAULT NULL,
  PRIMARY KEY (`ins_id`),

  CONSTRAINT `address_id3`
    FOREIGN KEY (`adress_id`)
    REFERENCES `mypro`.`ins_address` (`ins_add_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `mypro`.`donor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`donor` (
  `donor_id` VARCHAR(20) NOT NULL,
  `f_name` VARCHAR(30) NULL DEFAULT NULL,
  `m_name` VARCHAR(30) NULL DEFAULT NULL,
  `l_name` VARCHAR(30) NULL DEFAULT NULL,
  `gender` VARCHAR(1) NULL DEFAULT NULL,
  `DOB` DATE NULL DEFAULT NULL,
  `aadhar_id` VARCHAR(14) NULL DEFAULT NULL,
  `camp_id` VARCHAR(8) NULL DEFAULT NULL,
  `address_id` VARCHAR(10) NULL DEFAULT NULL,
  `contact_no` VARCHAR(10) NULL DEFAULT NULL,
  PRIMARY KEY (`donor_id`),
  INDEX `camp_id` (`camp_id` ASC) VISIBLE,
  INDEX `address_id` (`address_id` ASC) VISIBLE,
  CONSTRAINT `address_id`
    FOREIGN KEY (`address_id`)
    REFERENCES `mypro`.`address` (`address_id`),
  CONSTRAINT `camp_id`
    FOREIGN KEY (`camp_id`)
    REFERENCES `mypro`.`camp` (`camp_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `mypro`.`organ`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`organ` (
  `organ_id` VARCHAR(8) NOT NULL,
  `donor_id` VARCHAR(20) NULL DEFAULT NULL,
  `organ_name` VARCHAR(20) NULL DEFAULT NULL,
  `part_side` VARCHAR(45) NULL DEFAULT NULL,
  `o_flag` INT NULL DEFAULT NULL,
  PRIMARY KEY (`organ_id`),
  INDEX `donor_id` (`donor_id` ASC) VISIBLE,
  CONSTRAINT `donor_id`
    FOREIGN KEY (`donor_id`)
    REFERENCES `mypro`.`donor` (`donor_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `mypro`.`medical_detail`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`medical_detail` (
  `donor_id` VARCHAR(8) NOT NULL,
  `organ_id` VARCHAR(8) NOT NULL,
  `blood_group` VARCHAR(20) NULL DEFAULT NULL,
  `height` FLOAT NULL DEFAULT NULL,
  `weight` FLOAT NULL DEFAULT NULL,
  PRIMARY KEY (`donor_id`, `organ_id`),
  INDEX `organ_id1` (`organ_id` ASC) VISIBLE,
  CONSTRAINT `donor_id1`
    FOREIGN KEY (`donor_id`)
    REFERENCES `mypro`.`donor` (`donor_id`),
  CONSTRAINT `organ_id1`
    FOREIGN KEY (`organ_id`)
    REFERENCES `mypro`.`organ` (`organ_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `mypro`.`recepient`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`recepient` (
  `rec_id` VARCHAR(8) NOT NULL,
  `f_name` VARCHAR(45) NULL DEFAULT NULL,
  `m_name` VARCHAR(45) NULL DEFAULT NULL,
  `l_name` VARCHAR(45) NULL DEFAULT NULL,
  `gender` VARCHAR(1) NULL DEFAULT NULL,
  `DOB` DATE NULL DEFAULT NULL,
  `aadhar_id` VARCHAR(14) NULL DEFAULT NULL,
  `address_id` VARCHAR(10) NULL DEFAULT NULL,
  `contact_no` VARCHAR(10) NULL DEFAULT NULL,
  `registration_date` DATE NULL DEFAULT NULL,
  `ins_id` VARCHAR(8) NULL DEFAULT NULL,
  `r_flag` VARCHAR(8) NULL DEFAULT NULL,
  PRIMARY KEY (`rec_id`),
  INDEX `address_id4` (`address_id` ASC) VISIBLE,
  INDEX `ins_id4` (`ins_id` ASC) VISIBLE,
  CONSTRAINT `address_id4`
    FOREIGN KEY (`address_id`)
    REFERENCES `mypro`.`address` (`address_id`),
  CONSTRAINT `ins_id4`
    FOREIGN KEY (`ins_id`)
    REFERENCES `mypro`.`coordinators` (`ins_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `mypro`.`rec_details`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`rec_details` (
  `rec_id` VARCHAR(8) NOT NULL,
  `blood_group` VARCHAR(45) NULL DEFAULT NULL,
  `height` FLOAT NULL DEFAULT NULL,
  `weight` FLOAT NULL DEFAULT NULL,
  `needed_organ` VARCHAR(45) NULL DEFAULT NULL,
  `part_side` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`rec_id`),
  CONSTRAINT `rec_id7`
    FOREIGN KEY (`rec_id`)
    REFERENCES `mypro`.`recepient` (`rec_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `mypro`.`transplant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`transplant` (
  `organ_id` VARCHAR(8) NOT NULL,
  `rec_id` VARCHAR(8) NOT NULL,
  `date_time_of_transplant` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`organ_id`, `rec_id`),
  INDEX `rec_id6` (`rec_id` ASC) VISIBLE,
  CONSTRAINT `organ_id6`
    FOREIGN KEY (`organ_id`)
    REFERENCES `mypro`.`organ` (`organ_id`),
  CONSTRAINT `rec_id6`
    FOREIGN KEY (`rec_id`)
    REFERENCES `mypro`.`recepient` (`rec_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `mypro`.`trapped`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`trapped` (
  `user` VARCHAR(20) NULL DEFAULT NULL,
  `date_time` TIMESTAMP NULL DEFAULT NULL,
  `changetype` VARCHAR(10) NULL DEFAULT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `mypro`.`waiting_list`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`waiting_list` (
  `rec_id` VARCHAR(8) NOT NULL,
  `months_of_waiting` FLOAT NULL DEFAULT NULL,
  PRIMARY KEY (`rec_id`),
  CONSTRAINT `rec_id5`
    FOREIGN KEY (`rec_id`)
    REFERENCES `mypro`.`recepient` (`rec_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;

USE `mydb` ;

-- -----------------------------------------------------
-- procedure GetOfficeByCountry
-- -----------------------------------------------------

DELIMITER $$
USE `mydb`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetOfficeByCountry`(
	IN ins_id1 VARCHAR(8)
)
BEGIN
	select 
recepient.rec_id,
recepient.f_name,
recepient.m_name,
recepient.l_name,
recepient.gender,
recepient.DOB,
recepient.aadhar_id,
recepient.contact_no,
recepient.registration_date,
rec_details.blood_group,
rec_details.height,
rec_details.weight,
rec_details.needed_organ,
rec_details.part_side,
address.house_name,
address.society_name,
address.city,
address.pincode,
address.state
from recepient,rec_details,address
where trim(recepient.rec_id)=ins_id1 and trim(recepient.rec_id)=trim(rec_details.rec_id )and trim(address.address_id)=trim(recepient.address_id);
END$$

DELIMITER ;
USE `mypro` ;

-- -----------------------------------------------------
-- Placeholder table for view `mypro`.`camp_details`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`camp_details` (`camp_date` INT, `place` INT, `total_donors` INT, `total_organ_donated` INT);

-- -----------------------------------------------------
-- Placeholder table for view `mypro`.`coordinators_bank`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`coordinators_bank` (`ins_name` INT, `contact_no1` INT, `contact_no2` INT, `area` INT, `road` INT, `city` INT, `pincode` INT, `state` INT, `dis_from_bank` INT);

-- -----------------------------------------------------
-- Placeholder table for view `mypro`.`donor_details`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`donor_details` (`f_name` INT, `m_name` INT, `l_name` INT, `gender` INT, `DOB` INT, `aadhar_id` INT, `contact_no` INT, `house_name` INT, `society_name` INT, `city` INT, `pincode` INT, `state` INT);

-- -----------------------------------------------------
-- Placeholder table for view `mypro`.`total_organs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`total_organs` (`organ_name` INT, `count(organ_name)` INT);

-- -----------------------------------------------------
-- Placeholder table for view `mypro`.`waiting_list_hos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mypro`.`waiting_list_hos` (`rec_id` INT, `months_of_waiting` INT);

-- -----------------------------------------------------
-- procedure Organ_data
-- -----------------------------------------------------

DELIMITER $$
USE `mypro`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Organ_data`()
BEGIN

 declare r_organ varchar(50);
 declare finished integer default 0;
 declare c_organ cursor for select distinct organ_name from organ;
 declare continue handler for not found set finished=1;

 open c_organ;
 getorgan:loop
	fetch c_organ into r_organ;
	if finished=1 then
		leave getorgan;
	end if;

	select r_organ as 'Organ Name:';
	begin
		declare finished_2 int default 0;
		declare r_part varchar(50);
		declare c_part cursor for select distinct part_side from organ where r_organ=organ_name;
		declare continue handler for not found set finished_2 = 1;
		open c_part;
		getpart: loop
			fetch c_part into r_part;
			if finished_2 = 1 then
				leave getpart;
			end if;
		select r_part as 'Part or side of Organ:';
		select organ.donor_id, medical_detail.blood_group,medical_detail.height,medical_detail.weight from medical_detail left join organ on
		organ.organ_id=medical_detail.organ_id where organ.organ_name=r_organ and organ.part_side=r_part;
		end loop;
	end;
	end loop getorgan;
close c_organ;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- function count_organ
-- -----------------------------------------------------

DELIMITER $$
USE `mypro`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `count_organ`(organname varchar(20) ) RETURNS int
    DETERMINISTIC
BEGIN
	DECLARE r_count int;

	-- declare cursor for employee email
	DEClARE c_count 
		CURSOR FOR 
			select count(organ_name) as c from organ where organ_name=organname;
open c_count;
	FETCH c_count INTO r_count;
    
RETURN r_count;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- function count_recepiant
-- -----------------------------------------------------

DELIMITER $$
USE `mypro`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `count_recepiant`( institution_id  varchar(8) ) RETURNS int
    DETERMINISTIC
BEGIN
	DECLARE r_count int;
	DEClARE c_count 
		CURSOR FOR 
			select count(rec_id) as count from recepient where ins_id= institution_id;
	open c_count;
	FETCH c_count INTO r_count;    
RETURN r_count;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure display_ins_rec
-- -----------------------------------------------------

DELIMITER $$
USE `mypro`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `display_ins_rec`()
BEGIN
 declare r_count varchar(50);
 declare finished integer default 0;
 declare c_count cursor for select distinct ins_id from coordinators;
 declare continue handler for not found set finished=1;
 open c_count;
 getborrower_name:loop
 fetch c_count into r_count;
 if finished=1 then
 leave getborrower_name;
 end if;
 select ins_name as 'Institution name:' from coordinators where ins_id=r_count;
 select distinct recepient.ins_id,recepient.rec_id,recepient.f_name,recepient.m_name,recepient.l_name,rec_details.blood_group,
 rec_details.needed_organ,rec_details.part_side from recepient left join rec_details on  rec_details.rec_id=recepient.rec_id  where  trim(recepient.ins_id)=trim(r_count);

 end loop getborrower_name;
 close c_count;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure matching
-- -----------------------------------------------------

DELIMITER $$
USE `mypro`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `matching`(organName varchar(20),bloodgroup varchar(10),part varchar(20))
BEGIN
 select distinct organ.organ_id from organ,medical_detail where organ.organ_name=organName and organ.part_side=part 
 and medical_detail.blood_group=bloodgroup and o_flag=0;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure rec_detailOf_Hospital
-- -----------------------------------------------------

DELIMITER $$
USE `mypro`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `rec_detailOf_Hospital`(
	IN ins_id1 VARCHAR(8)
)
BEGIN
select 
recepient.rec_id,
recepient.f_name,
recepient.m_name,
recepient.l_name,
recepient.gender,
recepient.DOB,
recepient.aadhar_id,
recepient.contact_no,
recepient.registration_date,
rec_details.blood_group,
rec_details.height,
rec_details.weight,
rec_details.needed_organ,
rec_details.part_side,
address.house_name,
address.society_name,
address.city,
address.pincode,
address.state
from recepient,rec_details,address
where trim(recepient.ins_id)=ins_id1 and trim(recepient.rec_id)=trim(rec_details.rec_id )and trim(address.address_id)=trim(recepient.address_id);
END$$

DELIMITER ;

-- -----------------------------------------------------
-- View `mypro`.`camp_details`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mypro`.`camp_details`;
USE `mypro`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mypro`.`camp_details` AS select `mypro`.`camp`.`camp_date` AS `camp_date`,`mypro`.`camp`.`place` AS `place`,`mypro`.`camp`.`total_donors` AS `total_donors`,`mypro`.`camp`.`total_organ_donated` AS `total_organ_donated` from `mypro`.`camp`;

-- -----------------------------------------------------
-- View `mypro`.`coordinators_bank`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mypro`.`coordinators_bank`;
USE `mypro`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mypro`.`coordinators_bank` AS select `mypro`.`coordinators`.`ins_name` AS `ins_name`,`mypro`.`coordinators`.`contact_no1` AS `contact_no1`,`mypro`.`coordinators`.`contact_no2` AS `contact_no2`,`mypro`.`ins_address`.`area` AS `area`,`mypro`.`ins_address`.`road` AS `road`,`mypro`.`ins_address`.`city` AS `city`,`mypro`.`ins_address`.`pincode` AS `pincode`,`mypro`.`ins_address`.`state` AS `state`,`mypro`.`coordinators`.`dis_from_bank` AS `dis_from_bank` from (`mypro`.`coordinators` join `mypro`.`ins_address`) where (`mypro`.`coordinators`.`adress_id` = `mypro`.`ins_address`.`ins_add_id`);

-- -----------------------------------------------------
-- View `mypro`.`donor_details`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mypro`.`donor_details`;
USE `mypro`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mypro`.`donor_details` AS select `mypro`.`donor`.`f_name` AS `f_name`,`mypro`.`donor`.`m_name` AS `m_name`,`mypro`.`donor`.`l_name` AS `l_name`,`mypro`.`donor`.`gender` AS `gender`,`mypro`.`donor`.`DOB` AS `DOB`,`mypro`.`donor`.`aadhar_id` AS `aadhar_id`,`mypro`.`donor`.`contact_no` AS `contact_no`,`mypro`.`address`.`house_name` AS `house_name`,`mypro`.`address`.`society_name` AS `society_name`,`mypro`.`address`.`city` AS `city`,`mypro`.`address`.`pincode` AS `pincode`,`mypro`.`address`.`state` AS `state` from (`mypro`.`donor` join `mypro`.`address`) where (`mypro`.`donor`.`address_id` = `mypro`.`address`.`address_id`);

-- -----------------------------------------------------
-- View `mypro`.`total_organs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mypro`.`total_organs`;
USE `mypro`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mypro`.`total_organs` AS select `mypro`.`organ`.`organ_name` AS `organ_name`,count(`mypro`.`organ`.`organ_name`) AS `count(organ_name)` from `mypro`.`organ` group by `mypro`.`organ`.`organ_name`;

-- -----------------------------------------------------
-- View `mypro`.`waiting_list_hos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mypro`.`waiting_list_hos`;
USE `mypro`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mypro`.`waiting_list_hos` AS select `mypro`.`waiting_list`.`rec_id` AS `rec_id`,`mypro`.`waiting_list`.`months_of_waiting` AS `months_of_waiting` from `mypro`.`waiting_list`;
USE `mypro`;

DELIMITER $$
USE `mypro`$$
CREATE
DEFINER=`root`@`localhost`
TRIGGER `mypro`.`age`
BEFORE INSERT ON `mypro`.`donor`
FOR EACH ROW
begin
	declare msg varchar(200);
    declare d1 date;
    declare d2 date;
    set d1:=new.DOB ;
	set d2:= curdate();
	if ((timestampdiff(month, d1 , d2)) < 216) then
		 SET msg = 'Person having age less than 18 can not donate.....';
		SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = msg;
	END IF;
end$$

USE `mypro`$$
CREATE
DEFINER=`root`@`localhost`
TRIGGER `mypro`.`dec_donors_camp`
BEFORE DELETE ON `mypro`.`donor`
FOR EACH ROW
begin 
 	UPDATE camp SET total_donors = total_donors -1 where camp.camp_id = Old.camp_id;
 end$$

USE `mypro`$$
CREATE
DEFINER=`root`@`localhost`
TRIGGER `mypro`.`inc_donors_camp`
AFTER INSERT ON `mypro`.`donor`
FOR EACH ROW
begin 
 	UPDATE camp SET total_donors = total_donors + 1 where camp.camp_id = NEW.camp_id;
 end$$

USE `mypro`$$
CREATE
DEFINER=`root`@`localhost`
TRIGGER `mypro`.`d_bloodgroup`
BEFORE INSERT ON `mypro`.`medical_detail`
FOR EACH ROW
begin
	declare msg varchar(200);
	if (new.blood_group is null) then
		 SET msg = 'Please add a blood group of the donor...';
		SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = msg;
	end if;
end$$

USE `mypro`$$
CREATE
DEFINER=`root`@`localhost`
TRIGGER `mypro`.`User_info`
AFTER INSERT ON `mypro`.`recepient`
FOR EACH ROW
begin  
        insert into trapped values (user(), now(), 'Inserted');
end$$

USE `mypro`$$
CREATE
DEFINER=`root`@`localhost`
TRIGGER `mypro`.`User_info2`
AFTER UPDATE ON `mypro`.`recepient`
FOR EACH ROW
begin  
        insert into trapped values (user(), now() , 'Updated');
end$$

USE `mypro`$$
CREATE
DEFINER=`root`@`localhost`
TRIGGER `mypro`.`User_info3`
AFTER DELETE ON `mypro`.`recepient`
FOR EACH ROW
begin  
        insert into trapped values (user(), now() , 'Deleted');
end$$


DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
