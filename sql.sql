CREATE DATABASE venta_casas;

CREATE TABLE casa (
id INT PRIMARY KEY,
direccion VARCHAR(100),
ciudad VARCHAR(50),
precio DECIMAL(10,2),
metros_cuadrados INT
);

CREATE TABLE compra (
id INT PRIMARY KEY,
id_casa INT,
id_usuario INT,
fecha_compra DATE,
FOREIGN KEY (id_casa) REFERENCES casa(id),
FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);

CREATE TABLE contacto (
id INT PRIMARY KEY,
nombre VARCHAR(50),
telefono VARCHAR(15),
email VARCHAR(100),
id_casa INT,
FOREIGN KEY (id_casa) REFERENCES casa(id)
);

CREATE TABLE usuario (
id INT PRIMARY KEY,
nombre VARCHAR(50),
email VARCHAR(100),
telefono VARCHAR(15)
);