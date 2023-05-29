
/*! How to make this proyect */

--database_name: `grades`

/*! How to create table for this proyect */
 
CREATE TABLE `registry` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(25) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `P1` float(4,1) NOT NULL,
  `P2` float(4,1) NOT NULL,
  `P3` float(4,1) NOT NULL,
  `final` float(4,1) AS ((P1+P2+P3)/3)
);


--Add content to said table, in order to register students and their grades accordingly. 

INSERT INTO `registry` (`name`, `last_name`, `P1`, `P2`, `P3`,`Final`) VALUES
('Idalid', 'Cortez', '100', '100', '100', '' ),
('Guadalupe', 'Flores', '94', '89', '92', '' ), 
('Valeria', 'Vásquez', '98', '90', '100', '' ), 
('Daily', 'Acosta', '95', '84', '89', '' ), 
('Damián', 'Rivera', '100', '100', '100', '' ), 
('Juan Pablo', 'Ramos', '100', '95', '96', '' ), 
('Luis', 'Montaño', '91', '84', '86', '' ), 
('Natan', 'Peredo', '85', '82', '79', '' ), 
('Pedro', 'Soto', '85', '80', '84', '' ), 
('Rafael', 'Peralta', '92', '88', '90', '' ), 
('Samuel', 'Marrón', '75', '80', '62', '' ), 
('Sebastián', 'Rosas', '82', '81', '77', '' );


--Edit (update) database´s table so the final grade is averaged automatically. 
   --Update table to make "final" the average of P1, P2 and P3 automatically. 

UPDATE registry SET final = (P1 + P2 + P3) / 3;

--Attempt (1) > We are going to try to establish a parameter procedure so that 
--the database creates a cycle to calculate the procedure without me having to 
--insert the update in registry each time. I WINDED UP NOT USING THIS CODE BELOW WITH THE NEW ADDITION
--ON THE FIRST COMMAND BECAUSE I USED "AS" AND THAT COVERED IT FOR ME 

DELIMITER $$
CREATE PROCEDURE calcFinal(IN final varchar(4,1))
BEGIN
    SELECT * 
    FROM registry
    WHERE final = (P1 + P2 + P3) / 3;
END$$

DELIMITER $$
CREATE PROCEDURE calcFinal(INOUT float(4,1))
BEGIN
    SELECT * 
    FROM registry
    WHERE final = (P1 + P2 + P3) / 3;
END$$

