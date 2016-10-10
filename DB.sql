CREATE DATABASE SIMERS;
USE SIMERS;

CREATE TABLE user(
	status INT(1),
	email VARCHAR(60),
	senha VARCHAR(15),
	usuario VARCHAR(20),
	sobrenome VARCHAR(20),
	nome VARCHAR(20),
	id INTEGER PRIMARY KEY
);

INSERT INTO user(status,email,senha,usuario,sobrenome,nome,id) VALUES(1 ,'joao.matias@inmemorian.com ','asdf ' ,'joao.matias ' , 'Matias ' , 'João ' ,1);
INSERT INTO user(status,email,senha,usuario,sobrenome,nome,id) VALUES(1 ,'maria.graca@inmemorian.com ','fdsa ' ,'maria.graca ' , 'da Graça ' , 'Maria ' ,2);
INSERT INTO user(status,email,senha,usuario,sobrenome,nome,id) VALUES(0 ,'pedro.lara@inmemorian.com ','1234asdf ' ,'pedro.lara ' , 'de Lara ' , 'Pedro ' ,3);
INSERT INTO user(status,email,senha,usuario,sobrenome,nome,id) VALUES(1 ,'fulano.tal@detal.com ','onaluf ' ,'fulano.tal ' , 'De Tal ' , 'Fulano ' ,4);
INSERT INTO user(status,email,senha,usuario,sobrenome,nome,id) VALUES(1 ,'marcelo.moura@teste.com.br ','plokiqaws ' ,'marcelo.moura ' , 'Moura ' , 'Marcelo ' ,5);
INSERT INTO user(status,email,senha,usuario,sobrenome,nome,id) VALUES(0 ,'joao.maria@terra.com.br ','qawsed ' ,'joao.maria ' , 'Maria ' , 'João ' ,6);
INSERT INTO user(status,email,senha,usuario,sobrenome,nome,id) VALUES(1 ,'luciano.bobsin@site.com ','frvdgr ' ,'luciano.bobsin ' , 'Bobsin ' , 'Luciano ' ,7);
INSERT INTO user(status,email,senha,usuario,sobrenome,nome,id) VALUES(0 ,'pug.nassal@terra.com ','s125w4 ' ,'pug ' , 'Nassal ' , 'Pug ' ,8);
INSERT INTO user(status,email,senha,usuario,sobrenome,nome,id) VALUES(1 ,'vonnan@mail.com.br ','3212dd ' ,'vonnan ' , 'Niato ' , 'Vonnan ' ,9);