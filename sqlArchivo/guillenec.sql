create database phpintermedio;
use phpintermedio;

CREATE TABLE IF NOT EXISTS consultas (
    id_us int(11) auto_increment,
    nombre varchar(70) ,
    apellido varchar(50) ,
    edad int(3) ,
    correo varchar(70) ,
    motivo varchar(80),
    mensaje varchar(300),
    PRIMARY KEY (id_us)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#para el cuadrito de texto: type="texbox" o checbox

INSERT INTO consultas VALUES (DEFAULT, 'Pedrit', 'xapellido',20,'pedrito@gmail.com','consulta tecnica','se ne rompio todo ...');