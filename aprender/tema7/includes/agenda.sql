/* Si existe borra la base de datos */
drop database if exists agenda;

/* Crear DB */
create database agenda character set utf8 collate utf8_general_ci;
/* Usamos la agenda */
use agenda;

create table contactos(
	id_contacto		int not null auto_increment,
	nombre			varchar(100) not null,
	email 			varchar(100) not null,
	telf			int(9) not null,
	direccion		text not null,
	unique(email),
	primary key(id_contacto)
);
