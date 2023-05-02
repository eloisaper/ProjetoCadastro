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

-- inserindo dados
--insert into usuario
--(nome_usuario, fone_usuario, email_usuario, senha)
--values ('bianca','(18)99132446458','cas6@mg88.com','18163');
--select * from usuario;