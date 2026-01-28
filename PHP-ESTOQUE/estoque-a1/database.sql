CREATE DATABASE delta_estoque CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE delta_estoque;

CREATE TABLE produtos (
  id_produto INT AUTO_INCREMENT PRIMARY KEY,
  codigo INT NOT NULL,
  nome VARCHAR(100) NOT NULL,
  quantidade INT NOT NULL,
  volume INT,
  fornecedor VARCHAR(100),
  valor DECIMAL(10,2)
);

ALTER TABLE produtos
ADD COLUMN image_url VARCHAR(255) AFTER valor;