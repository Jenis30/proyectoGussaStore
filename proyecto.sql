-- Active: 1686688569661@@172.17.9.37@3306

create database proyecto;

use proyecto;

CREATE TABLE
    users (
        identificacion INT (20) NOT NULL PRIMARY KEY,
        nombres varchar(40) NOT NULL,
        apellidos varchar(40) NOT NULL,
        email varchar(50) NOT NULL,
        telefono bigint(40) NOT NULL,
        genero varchar(20) NOT NULL,
        clave varchar(200) NOT NULL,
        rol varchar(40) NOT NULL,
        estado varchar(25) NOT NULL,
        foto varchar(200) NOT NULL
    );

Create table
    Producto(
        IdProducto int primary key,
        Nombre varchar (25) NOT NULL,
        Marca varchar (25) NOT NULL,
        Lote varchar (25) NOT NULL,
        Descripcion text NOT NULL,
        Peso varchar (10) not null,
        PrecioUnitario varchar (10) not null,
        PrecioPorMayor varchar (15) not null
    );

create table
    Compras (
        IdCompra Int primary key,
        Fecha date not null,
        Hora time not null,
        ComIdProducto int not null
    );

create table
    Ventas (
        IdVentas Int primary key,
        Fecha date not null,
        Hora time not null,
        VenIdProducto int not null,
        CostoTotal int not null
    );

create table
    Inventario(
        IdInventario int primary key,
        Nombre varchar (25) not null,
        FechaRegistro date not null,
        HoraRegistro time not null,
        InvIdProducto int not null,
        cantidad int not null,
        Idcategoria int not null
    );

create table
    Categoria(
        IdCategoria int primary key,
        nombre varchar (25) not null,
        tallas varchar (20) not null
    );

Create table
    proveedor(
        IdProveedor int primary key,
        Nombre varchar (25) not null,
        Apellido varchar (25) not null,
        Telefono bigint not null,
        IdProducto int not null,
        Ciudad varchar (25) not null
    );

alter table compras
add
    foreign key (ComIdproducto) references producto (IdProducto);

alter table ventas
add
    foreign key (VenIdproducto) references producto (IdProducto);

alter table Inventario
add
    foreign key (IdCategoria) references Categoria (IdCategoria);

alter table Inventario
add
    foreign key (InvIdProducto) references producto (IdProducto);

alter table proveedor
add
    foreign key (IdProducto) references Producto (IdProducto);