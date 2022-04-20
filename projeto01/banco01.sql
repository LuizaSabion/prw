-- Drop banco de dados
-- drop database projeto01;

-- criação do banco de dados
create database projeto01;

-- selecionar banco de dados
use projeto01;

-- criaçao da tabela usuario
create table usuario (
	id_usuario			int				not null auto_increment,
    nome_usuario		varchar(100)	not null,
    email_usuario		varchar(100)	not null,
    telefone_usuario	varchar(30)		not null,
    primary key (id_usuario)
    );