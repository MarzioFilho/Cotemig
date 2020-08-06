create database veiculos_3_camadas;

use veiculos_3_camadas;

create table veiculos(
id int not null auto_increment,
placa char(7) not null,
marca varchar(60) not null,
modelo varchar(60) not null,
primary key(id)
);

create table acessorios(
id int not null auto_increment,
descricao varchar(100),
primary key(id)
);

create table cliente(
id int unsigned not null auto_increment,
nome varchar(50) not null,
email varchar(40) not null,
cpf char(11) not null,
telefone varchar(15) not null,
primary key(id)
);


create table venda(
id int not null auto_increment,
id_cliente int not null,
id_veiculo int not null,
data date not null,
valor double not null,
obs text null,
primary key(id),
foreign key(id_cliente)
	references cliente(id),
foreign key(id_veiculo)
	references veiculos(id)
);