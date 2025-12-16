create database smartagri;
use smartagri;

create table Usuario(
 idUsuario int auto_increment primary key,
 userUsuario varchar(100),
 nomeUsuario varchar(75) not null,
 emailUsuario varchar(75) not null, 
 senhaUsuario varchar(12) not null,
 cpfUsuario char(13),
 cepUsuario char(9),
 complemUsuario varchar(40),
 casaUsuario varchar(4),
 celUsuario char(13)
);


create table Produto(
codProduto int primary key,
nomeProduto varchar(100) not null,
precoProduto float not null
);

create table Pedido (
codPed int auto_increment primary key,
dtPed datetime,
dtEntega datetime,
quantPed int not null,
codProduto int,
idUsuario int not null,
FOREIGN KEY(idUsuario) references Usuario(idUsuario),
FOREIGN KEY (codProduto) REFERENCES Produto(codProduto)
);