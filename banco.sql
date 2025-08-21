create database futebol_laribol

use futebol_laribol

create table times (
    id_times INT not null,
    nome_times Varchar(50),
    sigla_times Varchar(5)
);

create table jogadores (
	id_jogadores INT not null,
	nome_jogadores Varchar(50),
	numero_jogadores INT,
	time_jogadores Varchar(50),
    posicao_jogadores Varchar(25)
);

create table partidas (
    id_partidas INT not null,
    data_partidas date,
    hora_partidas time,
    placar_partidas INT
);