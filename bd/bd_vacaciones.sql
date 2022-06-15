/**************** CREAR LA BASE DE DATOS ****************/
DROP DATABASE IF EXISTS gestion_vacacaciones;
CREATE DATABASE gestion_vacacaciones;
USE gestion_vacacaciones;

/* Creacion tabla empleados */
DROP TABLE IF EXISTS empleados;
CREATE TABLE empleados (
    id_empleado int(6) unsigned NOT NULL AUTO_INCREMENT,
    dni char(9),
    nombre varchar(30),
    apellidos varchar(30),
    mail varchar(100),
    cargo varchar(30),
    notas varchar(200),    
    ultima_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT pk_id_empleado PRIMARY KEY(id_empleado)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Creacion tabla vacaciones */
DROP TABLE IF EXISTS vacaciones;
CREATE TABLE vacaciones (
    id_vacacion int(9) unsigned NOT NULL AUTO_INCREMENT,
    id_empleado int(6) unsigned,
    fecha_inicio date,
    fecha_fin date,
    motivo varchar(30),
    notas varchar(500),
    ultima_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT pk_id_vacacion PRIMARY KEY(id_vacacion),
    CONSTRAINT fk_id_empleado FOREIGN KEY(id_empleado) REFERENCES empleados(id_empleado)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Creacion tabla usuarios */
DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
    id_usuario int(6) unsigned NOT NULL AUTO_INCREMENT,
    id_empleado int(6) unsigned,
    usuario char(9),
    pass varchar(100),
    ultima_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT pk_id_usuario PRIMARY KEY(id_usuario),
    CONSTRAINT fk_id_empleado2 FOREIGN KEY(id_empleado) REFERENCES empleados(id_empleado)

)ENGINE=InnoDB DEFAULT CHARSET=utf8;