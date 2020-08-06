create database sistema;
use sistema;

create table tbl_conta(
id int auto_increment not null,
descricao varchar(25) not null,
saldo double(9,2) not null,
primary key(id)
);

create table tbl_planoconta(
id int auto_increment not null,
descricao varchar(40) not null,
tipo char(1) not null,
primary key(id)
);

create table tbl_transacao(
id int auto_increment not null,
id_conta int not null,
id_planodeconta int not null,
descricao varchar(50) not null,
tipo char(1) not null,
data_hora date not null,
valor double(9,2) not null,
primary key(id),
foreign key(id_conta)
	references tbl_conta(id),
foreign key(id_planodeconta)
	references tbl_planoconta(id)
);

insert into tbl_conta values(null,'Santander',85964,054);
insert into tbl_conta values(null,'Caixa',5495,0874);
insert into tbl_conta values(null,'Banco do Brasil',1489,51);

insert into tbl_planoconta values(null,'Salário','N');
insert into tbl_planoconta values(null,'Aluguel','N');
insert into tbl_planoconta values(null,'Almoço','N');

insert into tbl_transacao values(null,1,1,'Aprovada','N',2016:10:04,25,00);
insert into tbl_transacao values(null,1,1,'Aprovada','N',2016:10:04,65,00);
insert into tbl_transacao values(null,1,1,'Aprovada','N',2016:10:04,8941,96);
