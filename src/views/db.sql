USE db_sistema;

CREAT TABLE tb_alunos (
    idalunos INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    matricula VARCHAR(10) NOT NULL,
    cidade VARCHAR(20) NOT NULL,
);

INSERT INTO tb_alunos (nome, matricula, cidade)
VALUES 
('Maria', '123456', 'Fortaleza'),
('Chiquinha', '123457', 'Aquiraz'),
('Chiquim', '123458', 'Caucaia'),
('Zezim', '123459', 'Eusébio');