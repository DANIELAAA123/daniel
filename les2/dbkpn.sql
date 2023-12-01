create database kpn;
use kpn;

create table klanten (
id_klanten int auto_increment,
naam varchar(255),
email varchar(255),
telefoonnummer varchar(255),
primary key (id_klanten)
);