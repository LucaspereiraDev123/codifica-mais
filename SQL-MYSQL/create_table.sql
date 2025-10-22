CREATE TABLE Produtos (
	id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    descricao VARCHAR(100),
    categoria VARCHAR(100),
    preco FLOAT(10,2),
    peso FLOAT(10,2),
    quantidade INT,
    id_fornecedor INT,
    criado_em DATE,
    atualizado_em DATE,
    deletado_em DATE
);

CREATE TABLE Fornecedores (
	id_fornecedor INT AUTO_INCREMENT PRIMARY KEY,
    razao_social VARCHAR(100),
    cnpj VARCHAR(14),
    criado_em DATE,
    atualizado_em DATE,
    deletado_em DATE
);

