CREATE DATABASE lojaFinal;
USE lojaFinal;

CREATE TABLE usuario (
  IDUsuario INT(10) PRIMARY KEY auto_increment,
  cpf VARCHAR(11),
  usuario VARCHAR(25),
  senha VARCHAR(35),
  Nome VARCHAR(100),
  email VARCHAR(50) NOT NULL,
  endereco_idendereco INT,
  FOREIGN KEY (endereco_idendereco) REFERENCES endereco(idendereco)
);

CREATE TABLE vendedor (
  IDVendedor INT(10) PRIMARY KEY auto_increment,
  produto_IDProduto INT(10),
  Nome VARCHAR(100),
  SalarioFixo DOUBLE,
  FaixaComissao CHAR(1),
  FOREIGN KEY (produto_IDProduto) REFERENCES produtos(IDProduto)
);

CREATE TABLE produtos (
  IDProduto INT(10) PRIMARY KEY auto_increment,
  titulo VARCHAR(50) NOT NULL,
  descricao VARCHAR(1000),
  unidade VARCHAR(4),
  imagem VARCHAR(200) NOT NULL,
  valorUnitario DOUBLE
);

CREATE TABLE produtos (
  id_produto INT(10) NOT NULL AUTO_INCREMENT,
  id_categoria INT(10) NOT NULL,
  titulo VARCHAR(50) NOT NULL,
  descricao VARCHAR(100) NOT NULL,
  valorUnitario DECIMAL(10,2) NOT NULL
);


create table administrador (
idADM int(10) not null auto_increment,
ADM varchar(100) not null,
senhaADM varchar(255) not null,
primary key(idADM)
);
select * from produtos;

INSERT INTO administrador (ADM, senhaADM) VALUES ('Ana Laura', 'YES4953ung???');

CREATE TABLE endereco (
  idendereco INT PRIMARY KEY auto_increment,
  logradouro VARCHAR(45),
  numero INT,
  complemento VARCHAR(45),
  cidade VARCHAR(25),
  uf CHAR(2),
  bairro VARCHAR(25),
  cep INT
);

CREATE TABLE categorias (
  id_categoria INT(10) NOT NULL AUTO_INCREMENT,
  categoria VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_categoria)
);

CREATE TABLE itempedido (
  IDPedido INT(10) PRIMARY KEY auto_increment,
  IDVendedor INT(10),
  IDProduto INT(10),
  IDUsuario INT(10),
  Quantidade INT(10),
  PrazoEntrega INT(10),
  FOREIGN KEY (IDVendedor) REFERENCES vendedor(IDVendedor),
  FOREIGN KEY (IDProduto) REFERENCES produtos(IDProduto),
  FOREIGN KEY (IDUsuario) REFERENCES usuario(IDUsuario)
);

CREATE TABLE imagens_prod (
  idimagens_prod INT PRIMARY KEY auto_increment,
  imagem VARCHAR(65),
  produto_IDProduto INT(10),
  FOREIGN KEY (produto_IDProduto) REFERENCES produtos(IDProduto)
);

CREATE TABLE endereco_usuario (
  endereco_idendereco INT auto_increment,
  usuario_IDUsuario INT(10),
  FOREIGN KEY (endereco_idendereco) REFERENCES endereco(idendereco),
  FOREIGN KEY (usuario_IDUsuario) REFERENCES usuario(IDUsuario)
);
 CREATE TABLE logs (
  id INT PRIMARY KEY AUTO_INCREMENT,
  tabela VARCHAR(50),
  acao VARCHAR(10),
  dados_antigos JSON,
  dados_novos JSON,
  data_hora DATETIME,
  usuario VARCHAR(50)
);

CREATE VIEW view_usuarios_pedidos AS
SELECT u.IDUsuario, u.Nome, u.email, p.IDPedido, p.Quantidade, p.PrazoEntrega
FROM usuario u
JOIN itempedido p ON u.IDUsuario = p.IDUsuario;

CREATE VIEW view_vendedores_produtos AS
SELECT v.IDVendedor, v.Nome AS NomeVendedor, p.IDProduto, p.titulo AS NomeProduto
FROM vendedor v
JOIN produtos p ON v.produto_IDProduto = p.IDProduto;

CREATE VIEW view_produtos_estoque AS
SELECT p.IDProduto, p.titulo, p.valorUnitario, SUM(i.Quantidade) AS Estoque
FROM produtos p
LEFT JOIN itempedido i ON p.IDProduto = i.IDProduto
GROUP BY p.IDProduto;

CREATE VIEW view_enderecos_usuarios AS
SELECT u.IDUsuario, u.Nome, u.email, e.logradouro, e.numero, e.complemento, e.cidade, e.uf, e.bairro, e.cep
FROM usuario u
JOIN endereco_usuario eu ON u.IDUsuario = eu.usuario_IDUsuario
JOIN endereco e ON eu.endereco_idendereco = e.idendereco;

CREATE VIEW view_logs_pedidos AS
SELECT l.id, l.tabela, l.acao, l.data_hora, l.usuario, u.Nome AS NomeUsuario
FROM logs l
JOIN usuario u ON l.usuario = u.usuario
WHERE l.tabela = 'itempedido';

INSERT INTO endereco (logradouro, numero, complemento, cidade, uf, bairro, cep)
VALUES ('Rua A', 123, 'Apto 101', 'São Paulo', 'SP', 'Centro', 12345678),
       ('Avenida B', 456, 'Casa 2', 'Rio de Janeiro', 'RJ', 'Copacabana', 98765432),
       ('Rua C', 789, '', 'Belo Horizonte', 'MG', 'Barro Preto', 56789123),
       ('Rua D', 321, 'Sala 202', 'Porto Alegre', 'RS', 'Centro Histórico', 87654321),
       ('Avenida E', 654, 'Apto 501', 'Salvador', 'BA', 'Barra', 23456789),
       ('Rua F', 987, 'Casa 10', 'Brasília', 'DF', 'Asa Sul', 76543210),
       ('Avenida G', 147, 'Sala 305', 'Recife', 'PE', 'Boa Viagem', 34567891),
       ('Rua H', 258, 'Apto 102', 'Fortaleza', 'CE', 'Aldeota', 90123456),
       ('Avenida I', 369, '', 'Curitiba', 'PR', 'Batel', 67891234),
       ('Rua J', 159, 'Casa 8', 'Manaus', 'AM', 'Centro', 54321098);

INSERT INTO itempedido (IDVendedor, IDProduto, IDUsuario, Quantidade, PrazoEntrega)
VALUES (1, 1, 1, 5, 7),
       (2, 2, 2, 3, 5),
       (3, 3, 3, 2, 3),
       (4, 4, 4, 10, 10),
       (5, 5, 5, 8, 7),
       (6, 6, 6, 1, 2),
       (7, 7, 7, 4, 5),
       (8, 8, 8, 6, 4),
       (9, 9, 9, 7, 6),
       (10, 10, 10, 9, 8);

INSERT INTO endereco_usuario (endereco_idendereco, usuario_IDUsuario)
VALUES (1, 1),
       (2, 2),
       (3, 3),
       (4, 4),
       (5, 5),
       (6, 6),
       (7, 7),
       (8, 8),
       (9, 9),
       (10, 10);

INSERT INTO logs (tabela, acao, dados_antigos, dados_novos, data_hora, usuario)
VALUES ('vendedor', 'insert', '{}', '{"IDVendedor": 11, "produto_IDProduto": 11, "Nome": "Gabriel", "SalarioFixo": 1800.00, "FaixaComissao": "A"}', NOW(), 'John Doe'),
       ('endereco', 'insert', '{}', '{"idendereco": 11, "logradouro": "Rua K", "numero": 753, "complemento": "", "cidade": "Florianópolis", "uf": "SC", "bairro": "Centro", "cep": 45678901}', NOW(), 'Jane Smith'),
       ('itempedido', 'insert', '{}', '{"IDPedido": 11, "IDVendedor": 5, "IDProduto": 8, "IDUsuario": 3, "Quantidade": 4, "PrazoEntrega": 6}', NOW(), 'Mark Johnson'),
       ('imagens_prod', 'insert', '{}', '{"idimagens_prod": 11, "imagem": "image11.jpg", "produto_IDProduto": 2}', NOW(), 'Sarah Williams'),
       ('logs', 'insert', '{}', '{"id": 5, "tabela": "logs", "acao": "insert", "dados_antigos": "{}", "dados_novos": "{\"id\": 5, \"tabela\": \"logs\", \"acao\": \"insert\", \"dados_antigos\": \"{}\", \"dados_novos\": \"{}\", \"data_hora\": \"2023-06-27 12:34:56\", \"usuario\": \"David Brown\"}", "data_hora": "2023-06-27 12:34:56", "usuario": "David Brown"}', NOW(), 'David Brown');

INSERT INTO imagens_prod (imagem, produto_IDProduto)
VALUES ('imagens/cadeiraGamer.jpg', 4),
       ('imagens/fonedegatinho.jpg', 6),
       ('imagens/fonedeouvido2.jpg', 8),
       ('imagens/gabineteGamer2.png', 9),
       ('imagens/mousepadgato3.jpg', 10),
       ('imagens/tecla.png', 11),
       ('imagens/setup.jpeg', 12),
       ('imagens/mousepad.jpg', 14),
       ('imagens/mouseGamer3.jpg', 15),
       ('imagens/monitorGamer2.jpg', 16),
       ('imagens/gabineteGamer8.jpg', 17);


DELIMITER //

CREATE TRIGGER tr_pedido AFTER INSERT ON itempedido
FOR EACH ROW
BEGIN
  DECLARE acao VARCHAR(10);
  
  SET acao = 'INSERT';

  INSERT INTO logs (tabela, acao, dados_antigos, dados_novos, data_hora, usuario)
  VALUES ('itempedido', acao,
          NULL,
          JSON_OBJECT('IDPedido', NEW.IDPedido, 'IDVendedor', NEW.IDVendedor, 'IDProduto', NEW.IDProduto, 'IDUsuario', NEW.IDUsuario),
          NOW(), 'username');
END //

DELIMITER ;