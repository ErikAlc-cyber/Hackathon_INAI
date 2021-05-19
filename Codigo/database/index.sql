CREATE DATABASE IF NOT EXISTS DNE;
USE DNE;

CREATE TABLE IF NOT EXISTS VACANTE(
	id_vacante int PRIMARY KEY,
	Sujeto_Obligado  varchar(100) NOT NULL,
	Fecha_Modif  date NOT NULL,
	Periodo  varchar(100) NOT NULL,
	Tot_plazas_BVacantes  int NOT NULL,
	Tot_plazas_CVacantes  int NOT NULL,
	Tot_plazas_Vacantes   int NOT NULL,
	Area   varchar(50) NOT NULL,
	Nota   varchar(50) NULL,
	id_contacto INT NOT NULL
    
);

CREATE TABLE IF NOT EXISTS CONTACTO (
	id_contacto INT PRIMARY KEY,
	domicilio VARCHAR(100) NOT NULL,
	telefono VARCHAR(100) NULL,
	email VARCHAR(100) NULL

);


ALTER TABLE VACANTE ADD FOREIGN KEY (id_contacto) REFERENCES CONTACTO (id_contacto);
INSERT INTO CONTACTO VALUES (1, 'calle 5 Norte', '5621234545', 'derechos_humano@gmail.com');
INSERT INTO VACANTE VALUES  (12365720, 'COMISION ESTATAL DE DERECHOS HUMANOS DEL ESTADO DE AGUASCALIENTES', '2021/04/25', 'Trimestral', 1, 1, 2,'Coordinación Administrativa','',1 );

DESCRIBE VACANTE;

SELECT * FROM VACANTE;


