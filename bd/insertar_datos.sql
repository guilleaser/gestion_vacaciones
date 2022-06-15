/* Empleados */
INSERT INTO `empleados`( `dni`, `nombre`, `apellidos`, `mail`, `cargo`, `notas`) 
    VALUES ('12345678P','Guillermo','Garcia Diez','guilleaser@yahoo.es', 'CEO','Director General');

/* Usuarios */
INSERT INTO `usuarios`(`id_empleado`, `usuario`, `pass`) 
        VALUES (1,'guille','guille');

/* Vacaciones */
INSERT INTO `vacaciones`( `id_empleado`, `fecha_inicio`, `fecha_fin`, `motivo`, `notas`) 
    VALUES (1,'2022/07/13','2022/08/13','Vacaciones','Prueba vacaciones');

INSERT INTO `vacaciones`( `id_empleado`, `fecha_inicio`, `fecha_fin`, `motivo`, `notas`) 
    VALUES (1,'2021/07/13','2021/08/13','Vacaciones','Prueba vacaciones 2');