DROP SCHEMA IF EXISTS aula15_exercicio02;

CREATE SCHEMA aula15_exercicio02;

CREATE TABLE aula15_exercicio02.usuarios (
	ID				INT PRIMARY KEY AUTO_INCREMENT,
    NOME_USUARIO	VARCHAR(100) NOT NULL UNIQUE,
    EMAIL			VARCHAR(255) NOT NULL UNIQUE,
    PASSWORD		VARCHAR(100) NOT NULL,
    STATUS			ENUM('ATIVO', 'INATIVO') DEFAULT 'ATIVO',
    PERFIL			ENUM('ADMIN', 'USUARIO') DEFAULT 'USUARIO',
    DATA_CADASTRO	DATETIME DEFAULT NOW()
); 

INSERT INTO aula15_exercicio02.usuarios (nome_usuario, email, password, perfil)
VALUES
('admin', 'admin@etcdf.com', md5('zico'), 'ADMIN');

INSERT INTO aula15_exercicio02.usuarios (nome_usuario, email, password, status)
VALUES
('rubens', 'rubens.aguiar@etcdf.com', md5('123'), 'ATIVO'),
('renata', 'renata.pereira@etcdf.com', md5('coração'), 'INATIVO'),
('maria santos', 'maria.santos@etcdf.com', md5('bar123'), 'INATIVO'),
('Margie', 'margie.simpsom@fox.com', md5('maggie'), 'ATIVO'),
('Bart', 'bart.simpsom@fox.com', md5('fugirhommer'), 'ATIVO'),
('Liza', 'liza.simpsom@fox.com', md5('music'), 'ATIVO'),
('Romário', 'romario.souza@etcdf.com', md5('egol'), 'ATIVO'),
('Zico', 'zico.galinho@etcdf.com', md5('campeao'), 'ATIVO'),
('Bradock', 'bradock@etcdf.com', md5('barbaro'), 'ATIVO'),
('Conan', 'conan@etcdf.com', md5('barbaro'), 'ATIVO'),
('Rambo', 'john.rambo@etcdf.com', md5('guerra'), 'ATIVO');
