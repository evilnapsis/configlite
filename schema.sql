create database configlite;
use configlite;

create table configuration(
	id int not null auto_increment primary key,
	preffix varchar(255) not null unique,
	label varchar(255) not null,
	kind int not null,
	val varchar(255) not null
);

insert into configuration(preffix,label,kind,val) value("company_name","Nombre de la empresa",2,"CONFIGLITE");
insert into configuration(preffix,label,kind,val) value("title","Titulo del Sistema",2,"Bienvenidos a Configlite");
insert into configuration(preffix,label,kind,val) value("admin_email","Email Administracion",2,"");
insert into configuration(preffix,label,kind,val) value("logo","Logo",4,"");
insert into configuration(preffix,label,kind,val) value("otra_imagen","Otra Imagen",4,"");