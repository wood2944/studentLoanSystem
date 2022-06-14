CREATE TABLE `userData` (
  `id` INT NOT NULL,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `userType` ENUM('Student', 'Bank', 'College') NULL,
  `bankName` VARCHAR(45) NULL,
  PRIMARY KEY (`id`)
  );
