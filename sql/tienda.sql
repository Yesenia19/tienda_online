drop table if exists Productos;
create table Productos(
       id_producto integer primary key AUTOINCREMENT not null,
       producto varchar(30) not null,
       precio integer not null,
       existencias integer not null
);

drop table if exists Tickets;
create table Tickets(
    id_ticket integer primary key AUTOINCREMENT not null,
    hora_venta TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
    cantidad_producto int not null,
    producto varchar(30) not null,
    total_producto int not null
);

insert into Productos(producto, precio, existencias) values("Aceite", "24", "15");
insert into Productos(producto, precio, existencias) values("Azucar", "30", "8");
insert into Productos(producto, precio, existencias) values("Galletas", "12", "23");
insert into Productos(producto, precio, existencias) values("Caja de leche", "15", "10");
insert into Productos(producto, precio, existencias) values("Yogurt 1lt", "35", "15");
insert into Productos(producto, precio, existencias) values("Sal", "10", "9");
insert into Productos(producto, precio, existencias) values("Cafe 200gr", "28", "15");
insert into Productos(producto, precio, existencias) values("Coca cola 2lts", "27", "18");

insert into Tickets(cantidad_producto,producto, total_producto) values("1", "Sal", "10");
