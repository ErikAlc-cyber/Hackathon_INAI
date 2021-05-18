CREATE DATABASE IF NOT EXISTS DNE;
USE DNE;

CREATE TABLE IF NOT EXISTS Vacantes(
	ID int PRIMARY KEY,
	Sujeto_Obligado varchar(100),
	Fecha_Modif date,
	Periodo date,
	Tot_plazas_BVacantes int,
	Tot_plazas_CVacantes int,
	Tot_plazas_Vacantes int,
	Area varchar(50),
	Nota varchar(50)
);

DESCRIBE Vacantes;