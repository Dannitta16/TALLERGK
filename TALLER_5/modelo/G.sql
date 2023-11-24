create database G;

use G;

CREATE TABLE rol_usuario (
  idRolusuario int(11) primary key  NOT NULL,
  descripRolusuario varchar(30) DEFAULT NULL,
  estadoRolusuario varchar(30) DEFAULT NULL
) ;


insert into rol_usuario values (5,'administrador', 'Activo');
insert into rol_usuario values (8,'usuario', 'Activo');
insert into rol_usuario values (7,'cliente', 'Activo');

select *from rol_usuario;
-- --------------------------------------------------------


CREATE TABLE usuario (
  id_usuario int  primary key  NOT NULL,
  tipo_DocUsuario varchar(30) DEFAULT NULL,
  no_DocUsuario varchar(20) DEFAULT NULL,
  nombre_usuario varchar(50) DEFAULT NULL,
  apellido_usuario varchar(50) DEFAULT NULL,
  direccion_usuario varchar(80) DEFAULT NULL,
  telefono_Usuario varchar(20) DEFAULT NULL,
  correo_Usuario varchar(70) DEFAULT NULL,
  password_usuario varchar(20) DEFAULT NULL,
  foto_usuario tinyblob DEFAULT NULL,
  estado_usuario varchar(30) DEFAULT NULL,
  idRolusuarioFK int(11) DEFAULT NULL,
  foreign key (idRolusuarioFK) references rol_usuario (idRolusuario)
) ;
insert into usuario values(12,'TI','20201515','Danna','Perez','cra 35','3154030','Danna@gmail.com','123','','activo',8);
insert into usuario values(10,'CC','60541837','Andres','Perez','calle 25','4690377','An20@gmail.com','158','','activo',8);
insert into usuario values(13,'TI','20156915','Carla','Cuellar','cra 29','3195639','Carla01@gmail.com','537','','activo',5);
select * from usuario;

CREATE TABLE producto (
  idproducto int(11) NOT NULL,
  descripProducto varchar(100) DEFAULT NULL,
  precioproducto double DEFAULT NULL,
  categoriaproducto varchar(40) DEFAULT NULL,
  estadoproducto varchar(30) DEFAULT NULL
);


CREATE TABLE pedido (
  idpedido int(11) NOT NULL,
  fechapedido date DEFAULT NULL,
  horapedido time DEFAULT NULL,
  totalpedido double DEFAULT NULL,
  estadopedido varchar(30) DEFAULT NULL,
  pedidoadomicilio char(3) DEFAULT NULL,
  idusuarioFK int(11) DEFAULT NULL
) ;


CREATE TABLE domicilio (
  idDomicilio int(11) NOT NULL,
  horaDomicilio time DEFAULT NULL,
  estadoDomicilio varchar(30) DEFAULT NULL,
  idpedidoFK int(11) DEFAULT NULL,
  idDomicilioFK int(11) DEFAULT NULL
) ;


CREATE TABLE detallepedido (
  idDetallepedido int(11) NOT NULL,
  idproductoFK int(11) DEFAULT NULL,
  cantidadproducto int(11) DEFAULT NULL,
  precioproducto double DEFAULT NULL,
  subtotalproducto double DEFAULT NULL,
  idpedidoFK int(11) DEFAULT NULL
) ;

select * from usuario;