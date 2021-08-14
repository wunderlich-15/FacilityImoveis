CREATE DATABASE facility;

CREATE TABLE cliente(
id_cliente int(11) PRIMARY KEY,
nome_cliente varchar(150) NOT NULL,
telefone_cliente varchar(11),
email_cliente varchar(150) NOT NULL,
senha_cliente varchar(50) NOT NULL,
RG_cliente varchar(12) NOT NULL,
foto_cliente varchar(200)
)

CREATE TABLE corretor(
id_corretor int(11) NOT NULL,
nome_corretor varchar(155) NOT NULL,
telefone_corretor varchar(11),
email_corretor varchar(150) NOT NULL,
creci_corretor varchar(6),
senha_corretor varchar(50) NOT NULL,
foto_corretor varchar(255),
)

CREATE TABLE anuncio(
id_anuncio int(11) NOT NULL,
titulo_anuncio varchar(220) NOT NULL,
enedereco_anuncio varchar(255) NOT NULL,
valor_anuncio double NOT NULL
descricao_anuncio varchar(255) NOT NULL,
criacao_anuncio datetime NOT NULL
)

ALTER TABLE cliente
	ADD PRIMARY KEY ('id_cliente'),
	ADD UNIQUE KEY 'email_cliente' ('email_cliente'),
	ADD UNIQUE KEY 'RG_cliente' ('RG_cliente');

ALTER TABLE corretor
	ADD PRIMARY KEY ('id_corretor'),
	ADD UNIQUE KEY 'email_corretor' ('email_corretor'),
	ADD UNIQUE KEY 'creci_corretor' ('creci_corretor');

ALTER TABLE anuncio
	ADD PRIMARY KEY ('id_anuncio');

ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `corretor`
  MODIFY `id_corretor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `anuncio`
  MODIFY `id_anuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;