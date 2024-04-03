create database if not exists Inventario;
use inventario;
create table if not exists Cervezas(
id int auto_increment,
nombre varchar(40),
precio_compra double,
precio_negocio double default 0,
precio_sixpack double default 0,
precio_cliente double default 0,
precio_unidad double default 0,
precioTotal_sixpack double default 0,
precioTotal_unidad double default 0,
porcentajeNegocio double default 0,
porcentajeSixpack double default 0,
porcentajeCliente double default 0,
porcentajeUnidad double default 0,
primary key(id)
);
describe Cervezas;
insert into cervezas(nombre, precio_compra, precio_negocio, precio_sixpack, precio_cliente) values ("Canasta Aguila",60900,61500,0,61500);
insert into cervezas(nombre, precio_compra, precio_negocio, precio_sixpack, precio_cliente, precio_unidad, precioTotal_sixpack, precioTotal_unidad, porcentajeNegocio, PorcentajeSixpack, porcentajeCliente, porcentajeUnidad) 
values ("Canasta Aguila",60900,61500,0,61500);

select * from cervezas;
update cervezas set nombre = "Costera",precio_compra = 25000,precio_negocio = 30000, precio_sixpack = 15000, precio_cliente = 18000 where id = 1;
drop table cervezas;
delete from cervezas where id = 1;


#################################################################Facturacion###############################################################3

create database if not exists facturacion;
use facturacion;

create table if not exists venta(
id integer auto_increment,
fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
nombreCliente varchar(40),
total double,
primary key(id)
);

insert into venta(nombreCliente,total) values("EL sitio",1232342);
select * from venta;
truncate table venta;
DELETE FROM venta where total = NULL;

create table if not exists productos(
id integer auto_increment,
nombre varchar(40),
precio double,
primary key(id)
);
SELECT * FROM productosCliente;
create table if not exists productosCliente(
id integer auto_increment,
nombre varchar(40),
precio double,
primary key(id)
);





























