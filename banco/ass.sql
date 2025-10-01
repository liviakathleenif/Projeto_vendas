create database bdLojaMine;
use bdLojaMine;

create table tbVendedor(
	id int primary key auto_increment,
    nome_vend varchar(90),
    telefone_vend varchar(11),
    email varchar(90),
    senha varchar(90)
);
create table tbProduto (
	cod_prod int primary key auto_increment,
	nome_prod varchar(90),
    valor_prod decimal(6,2),
    desc_prod varchar(120),
    foto varchar(50),
    qtde int ,
    postado BOOLEAN 
);
insert into tbVendedor(nome_vend,telefone_vend,email) values ('Rodolfo','11blablabla','golfinholindogostoso@gmail.com');
select * from tbVendedor;

insert into tbProduto(nome_prod,valor_prod,desc_prod,foto,qtde) values ('banana',2.50,'bananinha saborosa hummmmmm','fotoepicadabanana.jpg',572);

drop table tbProduto;
 
