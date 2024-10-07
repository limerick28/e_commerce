SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE carrinho (
  id_car int(6) NOT NULL,
  id_cli int(6) NOT NULL,
  id_prod int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO carrinho (id_car, id_cli, id_prod) VALUES
(14, 2, 17),
(15, 2, 20),
(16, 2, 16),
(17, 3, 20),
(18, 3, 17);

CREATE TABLE categorias (
  id smallint(2) NOT NULL,
  nome varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO categorias (id, nome) VALUES
(1, 'Placa de Vídeo'),
(2, 'Processador'),
(4, 'Mouse'),
(5, 'Monitor'),
(6, 'Memória'),
(7, 'Fonte de Alimentação');

CREATE TABLE produtos (
  id mediumint(5) NOT NULL,
  nome varchar(25) NOT NULL,
  quant tinyint(2) NOT NULL,
  valor float(7,2) NOT NULL,
  categoria smallint(2) NOT NULL,
  foto varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO produtos (id, nome, quant, valor, categoria, foto) VALUES
(16, 'RTX 4070 Super', 15, 3100.99, 1, '4070.jpg'),
(17, 'I3 12100f', 34, 675.50, 2, 'i3.jpg'),
(18, 'Memória DDR5', 83, 299.90, 6, 'ddr5.jpg'),
(20, 'Memória DDR4', 106, 185.57, 6, 'ddr4.jpg');

CREATE TABLE usuarios (
  id mediumint(4) NOT NULL,
  nome varchar(20) NOT NULL,
  login varchar(15) NOT NULL,
  senha varchar(10) NOT NULL,
  adm tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO usuarios (id, nome, login, senha, adm) VALUES
(1, 'Fulano', 'fulano', '123456', 1),
(2, 'Beltrano', 'beltrano', '1234', 0),
(3, 'Ciclano', 'ciclano', '654321', 0);


ALTER TABLE carrinho
  ADD PRIMARY KEY (id_car);

ALTER TABLE categorias
  ADD PRIMARY KEY (id);

ALTER TABLE produtos
  ADD PRIMARY KEY (id);

ALTER TABLE usuarios
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY login (login);


ALTER TABLE carrinho
  MODIFY id_car int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

ALTER TABLE categorias
  MODIFY id smallint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE produtos
  MODIFY id mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE usuarios
  MODIFY id mediumint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
