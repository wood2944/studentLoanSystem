CREATE TABLE `loanApplication` (
  `username` VARCHAR(30) NOT NULL,
  `distributingBank` ENUM('Chase', 'Huntington', 'Capital One', 'American Express') NULL,
  `dateApplied` DATE NULL,
  `loanAmount` INT NULL,
  `creditScore` INT NULL,
  `status` VARCHAR(30) NULL,
  `loanRate` VARCHAR(30) NULL,
  `loanID` INT NULL,
  `amountPaid` INT NULL,
  `paymentStatus` VARCHAR(45) NULL
  );
