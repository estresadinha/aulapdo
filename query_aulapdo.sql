-- Active: 1701346141789@@127.0.0.1@3306@aulapdo
CREATE table tb_produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome_produto VARCHAR(200),
    valor FLOAT (4,2),
    data_validade DATE
);
INSERT into tb_produtos (nome_produto, valor, data_validade) VALUES ("Arroz ", 22.99, '2025-05-01');
INSERT into tb_produtos (nome_produto, valor, data_validade) VALUES ("feijão ", 7.99, '2026-05-01');
INSERT into tb_produtos (nome_produto, valor, data_validade) VALUES ("monster ", 12.00, '2027-05-01');

SELECT * FROM tb_produtos;