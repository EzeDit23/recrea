CREATE TABLE vecinos (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    cant_des INT(20) NOT NULL,
    email VARCHAR(30) NOT NULL,
    clave VARCHAR(30) NOT NULL,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    direccion VARCHAR(50),
    numero INT(50)
);

CREATE TABLE AVISOS (
    id_aviso INT(6) AUTO_INCREMENT PRIMARY KEY,
    empresa VARCHAR(300) NOT NULL,
    categoria VARCHAR(300) NOT NULL,
    link VARCHAR(50)
);

CREATE TABLE descuentos (
    id_descuento INT(6) AUTO_INCREMENT PRIMARY KEY,
    codigo text(10) NOT NULL,
    nombre VARCHAR(250),
    porcentaje INT(6), 
    empresa VARCHAR(300) NOT NULL,
    categoria VARCHAR(300) NOT NULL,
    limite int (6),
    cantidad int (6),
    mes VARCHAR(50),
    link VARCHAR(50)
);

