-- arquivo de criação do banco de dados 

drop database if exists projeto1;
create database projeto1;
use projeto1;

create table usuario 
(
	id_usuario int(4) primary key auto_increment,
	nome_usuario varchar(50) not null,
	email_usuario varchar(50) not null,
    fone_usuario varchar(30) null,
	senha varchar(30) not null
);