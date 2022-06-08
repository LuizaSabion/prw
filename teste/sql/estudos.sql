create database estudos;
use estudos;

create table cronograma (
	id_cronograma 	    int			not null auto_increment,
    conteudo		varchar(150)	not null,
    materia			varchar(50)		not null,
    dia				date			not null,
    anotacoes		varchar(1000)	not null,
    horario			time			not null,
    foto_blob		blob,
    foto_nome		varchar(100),
    PRIMARY KEY (id_cronograma)
);