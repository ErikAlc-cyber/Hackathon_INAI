CREATE DATABASE IF NOT EXISTS DNE;
USE DNE;

CREATE TABLE IF NOT EXISTS Vacantes(
	ID int PRIMARY KEY,
	Sujeto_Obligado  varchar(100) NOT NULL,
	Fecha_Modif  date NOT NULL,
	Periodo  varchar(100) NOT NULL,
	Tot_plazas_BVacantes  int NOT NULL,
	Tot_plazas_CVacantes  int NOT NULL,
	Tot_plazas_Vacantes   int NOT NULL,
	Area   varchar(50) NOT NULL,
	Nota   varchar(50) NULL
);

INSERT INTO Vacantes VALUES  (12365720, 'COMISION ESTATAL DE DERECHOS HUMANOS DEL ESTADO DE AGUASCALIENTES', '2021/04/25', 'Trimestral', 1, 1, 2,'Coordinación Administrativa','' );

DESCRIBE Vacantes;


