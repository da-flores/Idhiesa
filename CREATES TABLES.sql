CREATE TABLE `assig_alu` (
  `USR_ID` int(11) NOT NULL,
  `CAR_ID` int(11) NOT NULL,
  `MAT_ID` int(11) NOT NULL,
  `ASSI_RATING` decimal(3,2) DEFAULT NULL,
  `ASSI_STATl` char(1) DEFAULT NULL,
  `ASSi_CICLO` varchar(10) NOT NULL,
  `ASSI_TCIC` char(1) NOT NULL,
  PRIMARY KEY (`USR_ID`,`CAR_ID`,`MAT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/**************************/
CREATE TABLE `career_idhiesa` (
  `CAR_ID` int(11) NOT NULL,
  `CAR_NAM` varchar(45) NOT NULL,
  `CAR_PERIOD` decimal(2,2) NOT NULL,
  PRIMARY KEY (`CAR_ID`),
  UNIQUE KEY `CAR_ID_UNIQUE` (`CAR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


/*++++++++++++++++++*/

CREATE TABLE `log_idhiesa` (
  `LOG_DATET` datetime NOT NULL,
  `LOG_ID` varchar(45) NOT NULL,
  `LOG_ESTAT` varchar(6) NOT NULL,
  `LOG_MESSAG` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/***************************************/

CREATE TABLE `matter_carrer` (
  `CAR_ID` int(11) NOT NULL,
  `MAT_ID` int(11) NOT NULL,
  `MAT_NAM` varchar(45) NOT NULL,
  `MAT_BLCK` int(11) NOT NULL,
  PRIMARY KEY (`CAR_ID`,`MAT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/**************************************/

CREATE TABLE `user_idhiesa` (
  `USR_ID` int(10) unsigned zerofill NOT NULL,
  `USR_PASS` varchar(10) NOT NULL,
  `USR_TYPE` char(2) NOT NULL,
  `USR_EMAIL` varchar(45) NOT NULL,
  `USR_STAT` char(2) NOT NULL,
  `USR_DCREAT` date NOT NULL,
  `USR_DBJ` date DEFAULT NULL,
  PRIMARY KEY (`USR_ID`),
  UNIQUE KEY `USR_ID_UNIQUE` (`USR_ID`),
  UNIQUE KEY `USR_EMAIL_UNIQUE` (`USR_EMAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*********************************/

CREATE TABLE `usr_addr` (
  `USR_ID` int(10) unsigned zerofill NOT NULL,
  `USR_FIRST_NAM` varchar(45) NOT NULL,
  `USR_LAST_NAM` varchar(45) NOT NULL,
  `USR_DIR` varchar(100) DEFAULT NULL,
  `USR_LTEL` bigint(20) DEFAULT NULL,
  `USR_PTEL` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`USR_ID`),
  UNIQUE KEY `USR_ID_UNIQUE` (`USR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;







