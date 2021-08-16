drop database bd_ProvaBanco;

create database bd_ProvaBanco;

use bd_ProvaBanco;

CREATE TABLE tipoConta(
	idTipo int AUTO_INCREMENT,
	descricao varchar(30) NOT NULL,
	PRIMARY KEY (idTipo)
);

CREATE TABLE conta(
  idConta int AUTO_INCREMENT,
  nomeTitular varchar(50) NOT NULL,
  cpfTitular varchar(14),
  idTipoConta int NOT NULL,
  agencia varchar(5) NOT NULL,
  numeroConta varchar(6) NOT NULL,
  dtAbertura datetime NOT NULL,
  PRIMARY KEY (idConta),
  FOREIGN KEY (idTipoConta) references tipoConta(idTipo)
);

insert into tipoConta values (NULL, 'Conta Corrente');
insert into tipoConta values (NULL, 'Poupança');
insert into tipoConta values (NULL, 'CDB');
insert into tipoConta values (NULL, 'RDB');
insert into tipoConta values (NULL, 'Fundos de Investimentos');
insert into tipoConta values (NULL, 'Tesouro Direto');

insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('Filipe',   '25836914711', 1, '1478', '3647-8', '1987/09/22');
insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('João',     '15814725863', 5, '4545', '2587-2', '2016/08/20');
insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('Camila',   '25454545631', 3, '1478', '2312-1', '1990/10/22');
insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('Fernando', '21321554321', 2, '1478', '2534-2', '2010/12/20');
insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('Matheus',  '35454542123', 1, '4545', '5654-5', '1988/11/22');
insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('Leonardo', '54542121324', 3, '1478', '2642-2', '2008/08/20');
insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('Gabriel',  '54554212455', 1, '1478', '8242-7', '2000/05/22');
insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('Carlos',   '56635432348', 2, '1478', '2453-x', '2015/07/10');
insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('Márcio',   '87987675655', 4, '4545', '2567-8', '1999/06/22');
insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('Isaque',   '34356546678', 3, '1478', '2648-x', '2003/05/20');
insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('Carla',    '45213435546', 1, '1478', '3354-1', '2013/04/22');
insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('Eduarda',  '33545436475', 3, '1348', '2544-2', '2014/03/20');
insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('Liliane',  '55369554335', 1, '1348', '1657-x', '2008/02/22');
insert into conta(nomeTitular,cpfTitular,idTipoConta,agencia, numeroConta, dtAbertura) values('Jussara',  '12547854711', 2, '1478', '2154-2', '2013/01/20');


