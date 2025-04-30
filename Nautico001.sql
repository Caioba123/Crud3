create table Cadastro (
id_cadastro int primary key auto_increment,
descrição varchar(255) not null,
valor_despesa decimal(10,2) not null,
salário decimal(10,2) not null,
tipo varchar(200) not null,
data1 date not null
);

select*from Cadastro;