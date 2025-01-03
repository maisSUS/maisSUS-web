DROP SCHEMA IF EXISTS maissus ;

CREATE SCHEMA IF NOT EXISTS maissus DEFAULT CHARACTER SET utf8 ;
USE maissus ;

CREATE TABLE IF NOT EXISTS LOGIN_USUARIO (
    idUsuario INT PRIMARY KEY,
    cpfUsuario VARCHAR(15),
    cartaoSus VARCHAR(30),
    nomeUsuario VARCHAR(40),
    email VARCHAR(40),
    telUsuario VARCHAR(20),
    senha VARCHAR(32)
);

CREATE TABLE IF NOT EXISTS AGENDAMENTO_CONSULTA (
    FK_idUsuario INT,
    FK_idUnidade INT,
    FK_idMedico INT,
    FK_idEspecialidade INT,
    FK_idHorario INT,
    dataConsulta DATE
);

CREATE TABLE IF NOT EXISTS HORARIO (
    idHorario INT PRIMARY KEY,
    dscHorario VARCHAR(15)
);

CREATE TABLE IF NOT EXISTS DIA_SEMANA (
    idDia INT PRIMARY KEY,
    dscDia VARCHAR(15)
);


CREATE TABLE IF NOT EXISTS AGENDA_MEDICO (
    FK_idDia INT,
    FK_idHorario INT,
    FK_idMedico INT
);

CREATE TABLE IF NOT EXISTS EXAME (
    idExame INT PRIMARY KEY,
    nomeExame VARCHAR(32)
);

CREATE TABLE IF NOT EXISTS AGENDAMENTO_EXAME (
    FK_idHorario INT,
    FK_idUnidade INT,
    FK_idUsuario INT,
    FK_idExame INT,
    dataExame DATE
);

CREATE TABLE IF NOT EXISTS UNIDADE (
    idUnidade INT PRIMARY KEY,
    telUnidade VARCHAR(20),
    hrFuncionamento VARCHAR(15),
    nomeUnidade VARCHAR(40),
    localUnidade VARCHAR(80),
    bairroUnidade VARCHAR(35)
);

CREATE TABLE IF NOT EXISTS MEDICO (
    idMedico INT PRIMARY KEY,
    nomeMedico VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS ESPECIALIDADE (
    idEspecialidade INT PRIMARY KEY,
    dscEspecialidade VARCHAR(40)
);

CREATE TABLE IF NOT EXISTS VACINA (
    numDoses VARCHAR(45),
    idVac INT PRIMARY KEY,
    nomeVac VARCHAR(40),
    dscIdade VARCHAR(150)
);

CREATE TABLE IF NOT EXISTS OFERTA_VACINAS (
    statusDisp INT,
    FK_idUnidade INT,
    FK_idVac INT
);

CREATE TABLE IF NOT EXISTS CADASTRO_MEDICO (
    FK_idUnidade INT,
    FK_idMedico INT,
    FK_idEspecialidade INT
);

ALTER TABLE AGENDAMENTO_CONSULTA ADD CONSTRAINT FK_AGENDAMENTO_CONSULTA_1
    FOREIGN KEY (FK_idUsuario)
    REFERENCES LOGIN_USUARIO (idUsuario)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_CONSULTA ADD CONSTRAINT FK_AGENDAMENTO_CONSULTA_2
    FOREIGN KEY (FK_idUnidade)
    REFERENCES UNIDADE (idUnidade)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_CONSULTA ADD CONSTRAINT FK_AGENDAMENTO_CONSULTA_3
    FOREIGN KEY (FK_idMedico)
    REFERENCES MEDICO (idMedico)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_CONSULTA ADD CONSTRAINT FK_AGENDAMENTO_CONSULTA_4
    FOREIGN KEY (FK_idEspecialidade)
    REFERENCES ESPECIALIDADE (idEspecialidade)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_CONSULTA ADD CONSTRAINT FK_AGENDAMENTO_CONSULTA_5
    FOREIGN KEY (FK_idHorario)
    REFERENCES HORARIO (idHorario)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDA_MEDICO ADD CONSTRAINT FK_AGENDA_MEDICO_1
    FOREIGN KEY (FK_idDia)
    REFERENCES DIA_SEMANA (idDia)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDA_MEDICO ADD CONSTRAINT FK_AGENDA_MEDICO_2
    FOREIGN KEY (FK_idHorario)
    REFERENCES HORARIO (idHorario)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDA_MEDICO ADD CONSTRAINT FK_AGENDA_MEDICO_3
    FOREIGN KEY (FK_idMedico)
    REFERENCES MEDICO (idMedico)
    ON DELETE CASCADE;
 
ALTER TABLE OFERTA_VACINAS ADD CONSTRAINT FK_OFERTA_VACINAS_1
    FOREIGN KEY (FK_idUnidade)
    REFERENCES UNIDADE (idUnidade)
    ON DELETE CASCADE;
 
ALTER TABLE OFERTA_VACINAS ADD CONSTRAINT FK_OFERTA_VACINAS_2
    FOREIGN KEY (FK_idVac)
    REFERENCES VACINA (idVac)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_EXAME ADD CONSTRAINT FK_AGENDAMENTO_EXAME_1
    FOREIGN KEY (FK_idHorario)
    REFERENCES HORARIO (idHorario)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_EXAME ADD CONSTRAINT FK_AGENDAMENTO_EXAME_2
    FOREIGN KEY (FK_idUnidade)
    REFERENCES UNIDADE (idUnidade)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_EXAME ADD CONSTRAINT FK_AGENDAMENTO_EXAME_3
    FOREIGN KEY (FK_idUsuario)
    REFERENCES LOGIN_USUARIO (idUsuario)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_EXAME ADD CONSTRAINT FK_AGENDAMENTO_EXAME_4
    FOREIGN KEY (FK_idExame)
    REFERENCES EXAME (idExame)
    ON DELETE CASCADE;
 
ALTER TABLE CADASTRO_MEDICO ADD CONSTRAINT FK_CADASTRO_MEDICO_1
    FOREIGN KEY (FK_idUnidade)
    REFERENCES UNIDADE (idUnidade);

 
ALTER TABLE CADASTRO_MEDICO ADD CONSTRAINT FK_CADASTRO_MEDICO_2
    FOREIGN KEY (FK_idMedico)
    REFERENCES MEDICO (idMedico);
 
ALTER TABLE CADASTRO_MEDICO ADD CONSTRAINT FK_CADASTRO_MEDICO_3
    FOREIGN KEY (FK_idEspecialidade)
    REFERENCES ESPECIALIDADE (idEspecialidade);


INSERT INTO LOGIN_USUARIO (idUsuario, cpfUsuario, cartaoSus, nomeUsuario, email, telUsuario, senha) VALUES
(1, '026.735.639-01', '791826338500002', 'Ana Clara Souza', 'ana.souza@gmail.com', '(45) 99095-2513', md5('6355A')),
(2, '345.767.311-02', '145827199070004', 'Carlos Eduardo Lima', 'maiacunha@gmail.com', '(95) 99095-2519', md5('1574J')),
(3, '316.753.319-04', '188280715640001', 'Mariana Alves Pereira', 'mariana.pereira@gmail.com', '(53) 94335-5632', md5('5674O')),
(4, '668.583.643-04', '229432710700001', 'Rafael da Silva Costa', 'rafael.costa@gmail.com', '(21) 99432-9782', md5('8643R')),
(5, '871.882.734-07', '177243255200000', 'Bianca Oliveira Santos', 'bianca.santos@gmail.com', '(63) 98254-8724', md5('5756Y')),
(6, '979.979.098-01', '163973673530005', 'Lucas Henrique Martins', 'lucas.martins@gmail.com', '(23) 99195-2514', md5('6678F')),
(7, '900.761.617-06', '210921239690007', 'Fernanda Ribeiro Monteiro', 'fernanda.monteiro@gmail.com', '(92) 98503-2136', md5('5639P')),
(8, '846.145.677-70', '218901193930008', 'João Pedro Almeida', 'joao.almeida@gmail.com', '(68) 95454-9930', md5('6745Q')),
(9, '009.377.677-27', '851710674800018', 'Camila Fernanda Rocha', 'camila.rocha@gmail.com', '(92) 98548-4519', md5('5674R')),
(10, '721.878.607-50', '104985986300009', 'Gabriel Torres Barbosa', 'gabriel.barbosa@gmail.com', '(31) 98713-1910', md5('5533J')),
(11, '492.936.587-01', '278573114393004', 'Juliana Batista Nunes', 'juliana.nunes@gmail.com', '(96) 99220-6063', md5('5653L'));

INSERT INTO HORARIO (idHorario, dscHorario) VALUES
(10, '08:00'),
(11, '08:15'),
(12, '08:30'),
(13, '08:45'),
(14, '09:00'),
(15, '09:15'),
(16, '09:30'),
(17, '09:45'),
(18, '10:00'),
(19, '10:15'),
(20, '10:30'),
(21, '10:45'),
(22, '11:00'),
(23, '11:15'),
(24, '11:30'),
(25, '11:45'),
(26, '12:00'),
(27, '12:15'),
(28, '12:30'),
(29, '12:45'),
(30, '13:00'),
(31, '13:15'),
(32, '13:30'),
(33, '13:45'),
(34, '14:00'),
(35, '14:15'),
(36, '14:30'),
(37, '14:45'),
(38, '15:00'),
(39, '15:15'),
(40, '15:30'),
(41, '15:45'),
(42, '16:00'),
(43, '16:15'),
(44, '16:30'),
(45, '16:45'),
(46, '17:00'),
(47, '17:15'),
(48, '17:30'),
(49, '17:45'),
(50, '18:00'),
(51, '18:15'),
(52, '18:30'),
(53, '18:45'),
(54, '19:00'),
(55, '19:15'),
(56, '19:30'),
(57, '19:45'),
(58, '20:00'),
(59, '20:15'),
(60, '20:30'),
(61, '20:45');

INSERT INTO DIA_SEMANA (idDia, dscDia) VALUES
(1, 'Domingo'),
(2, 'Segunda-Feira'),
(3, 'Terça-Feira'),
(4, 'Quarta-Feira'),
(5, 'Quinta-Feira'),
(6, 'Sexta-feira'),
(7, 'Sábado');

INSERT INTO UNIDADE (idUnidade, nomeUnidade, localUnidade, bairroUnidade, hrFuncionamento, telUnidade) VALUES
(10, 'ESF Andre Carloni', 'Rubia Jardim batista', 'Andre Carloni', '07:00 - 17:00', '(27) 3338-3486'),
(12, 'ESF Bairro de Fátima', 'Rua Via Lobos', 'Bairro de Fátima', '07:00 - 17:00', '(27) 3338-3485'),
(14, 'UBS Barcelona', 'Rua Londrina', 'Barcelona', '07:00 - 18:00', '(27) 3341-4858'),
(16, 'ESF Boa Vista', 'Rua Anastacio Cassaro', 'Boa Vista II', '07:00 - 18:00', '(27) 3338-3487'),
(18, 'ESF Campinho da Serra', 'Av Vereador Jorge Caculo', 'Campinho da Serra II', '07:00 - 18:00', '(27) 3338-3486'),
(20, 'ESF Carapina Grande', 'Rua Santa Monica', 'Carapina Grande', '07:00 - 18:00', '(27) 3338-3486'),
(22, 'ESF Central Carapina', 'Av Brasil', 'Central Carapina', '07:00 - 18:00', '(27) 3338-3486'),
(24, 'ESF Chacara Parreiral', 'Rua Raimundo Correa', 'Chacara Parreiral', '07:00 - 18:00', '(27) 3328-3485'),
(26, 'ESF Cidade Continental', 'Rua dos Índios', 'Cidade Continental', '08:00 - 18:00', '(27) 3338-3486'),
(28, 'ESF Oceania', 'Av Meridional', 'Carapina', '08:00 - 18:00', '(27) 3338-3486'),
(30, 'UBS Eldorado', 'Av Rio Doce', 'Eldorado', '08:00 - 17:00', '(27) 3338-3486'),
(32, 'UBS Pedro Feu Rosa', 'Av Vitoria Régia', 'Feu Rosa', '07:00 - 17:00', '(27) 3243-3485'),
(34, 'UBS Jacaraípe', 'Av Minas Gerais', 'Jardim Atlântica', '07:00 - 17:00', '(27) 3338-3486'),
(36, 'ESF Jardim Tropical', 'Av Central', 'Jardim tropical', '08:00 - 17:00', '(27) 3338-3486'),
(38, 'ESF Jose Anchieta', 'Rua Pereba do Campo', 'Jose Anchieta', '07:00 - 17:00', '(27) 3338-3486'),
(40, 'ESF Laranjeiras Velha', 'Av Coronel Manoel Nunes', 'Laranjeiras velha', '08:00 - 17:00', '(27) 3338-4485'),
(42, 'ESF Manguezais', 'Rua Piragui', 'Manguezais', '07:00 - 17:00', '(27) 3338-4486'),
(44, 'ESF Manoel Plaza', 'Rua Maria Estevao da Penha Machado', 'Manoel Plaza', '07:00 - 18:00', '(27) 3241-3486'),
(46, 'UBS Nova Almeida', 'Av Colatinese', 'Nova Almeida', '07:00 - 18:00', '(27) 3241-3486'),
(48, 'ESF Nova Carapina I', 'Av Belo Horizonte', 'Nova Carapina I', '07:00 - 18:00', '(27) 3338-3486'),
(50, 'ESF Nova Carapina II', 'Av Montes Claros', 'Nova Carapina II', '07:00 - 17:00', '(27) 3338-3486'),
(52, 'UBS Novo Horizonte', 'Av Brasil', 'Novo Horizonte', '07:00 - 17:00', '(27) 3338-3486'),
(54, 'ESF Parque Res Laranjeiras', 'Rua Coelho Neto', 'Parque Residencial I', '08:00 - 17:00', '(27) 3338-3485'),
(56, 'ESF Porto Branco', 'Rua Ipatinga', 'Parque Residencial II', '07:00 - 18:00', '(27) 3338-3486'),
(58, 'ESF Pitanga', 'Rua Aristides Correa', 'Pitanga', '07:00 - 18:00', '(27) 3338-3486'),
(60, 'ESF Planalto Serrano Bloco A', 'Av Brasilia', 'Planalto Serrano Bloco A', '08:00 - 17:00', '(27) 3338-3486'),
(62, 'ESF Planalto Serrano Bloco B', 'Av Brasilia', 'Planalto Serrano Bloco D', '08:00 - 17:00', '(27) 3338-3486'),
(64, 'UBS Porto Canoa', 'Rua Bico de Lacre', 'Porto Canoa', '07:00 - 17:00', '(27) 3338-3486'),
(66, 'UBS Carapebus', 'Rua Dona Belmira de Oliveira', 'Praia de Carapebus', '07:00 - 17:00', '(27) 3243-3485'),
(68, 'ESF Putiri', 'Rua Manoel Bandeira', 'Putiri', '07:00 - 18:00', '(27) 3243-3486'),
(70, 'UBS Região Dorneles de Jesus', 'Rua Maceió', 'Sao Marcos II', '07:00 - 18:00', '(27) 3338-3486'),
(72, 'UBS Serra Dourada', 'Av Brasilia', 'Serra Dourada II', '07:00 - 18:00', '(27) 3338-3486'),
(74, 'ESF Taquara I', 'Rua Sabino Rosa', 'Taquara I', '07:00 - 18:00', '(27) 3338-3486'),
(76, 'ESF Taquara II', 'Rua Treze de Maio', 'Taquara II', '08:00 - 17:00', '(27) 3338-3486'),
(78, 'UBS Vista da Serra', 'Av Guarapari', 'Vista da Serra', '07:00 - 18:00', '(27) 3338-3486'),
(80, 'UBS Vista dos Colares', 'Rua Rosa Orlato Conte', 'Vila Nova de Colares', '07:00 - 18:00', '(27) 3338-3486');

INSERT INTO VACINA (idVac, numDoses, nomeVac, dscIdade) VALUES
(1, '1 dose anual', 'Gripe', 'A partir de 6 meses de idade'),
(2, '2 a 3 doses', 'HPV', 'De 9 a 14 anos'),
(3, '1 dose', 'BCG', 'Ao nascer'),
(4, '2 doses', 'Hepatite A', 'De 15 meses a 3 anos'),
(5, '3 doses', 'Hepatite B', 'Ao nascer (primeira dose), com reforços aos 2 e 6 meses'),
(6, '2 doses', 'Tríplice Viral', 'Primeira dose aos 12 meses e segunda dose aos 15 meses'),
(7, '2 doses', 'Rotavírus', 'Primeira dose com 2 meses e a segunda com 4 meses de vida'),
(8, '5 + reforços', 'Tríplice Bacteriana Acelular', 'Para grávidas: entre 20 e 38 semanas de gestação e crianças de 4 anos'),
(9, '1 a 2 doses', 'Herpes Zoster', 'Pessoas acima de 50 anos e a partir de 18 anos para imunossuprimidos'),
(10, '2 a 4 doses', 'Poliomielite', '2, 4, e 6, 15 meses e 4 anos'),
(11, '1 dose', 'Febre amarela', 'Aos 9 meses (uma dose) e um reforço aos 4 anos - Para quem nunca tomou, pode ser aplicada em qualquer idade'),
(12, '2 doses', 'Varicela', 'Primeira dose aos 15 meses; Segunda dose até os 5 anos'),
(13, '1 ou 3 doses', 'Pneumonia', '2, 4 e 6 meses; com reforço aos 12 meses'),
(14, '2 ou 3 doses', 'Meningite', 'Aos 3 e 5 meses, com reforço aos 12 meses; 11 a 14 anos'),
(15, '3 + reforços', 'Tétano', 'Primeiras doses incluídas na vacina Pentavalente (2, 4 e 6 meses): com reforço aos 4 anos e a cada 10 anos na vida adulta'),
(16, '5 + reforços', 'Coqueluche', 'Faz parte da vacina da gripe'),
(17, '1 dose anual', 'Gripe Suína', 'Faz parte da vacina da gripe'),
(18, '3 + reforços', 'Raiva', 'Qualquer idade'),
(19, '2 + reforços', 'Covid-19', 'A partir de 6 meses de idade');

INSERT INTO EXAME (idExame, nomeExame) VALUES
(1, 'Raio-X'),
(2, 'Hemograma completo'),
(3, 'Exame de urina'),
(4, 'Tomografia computadorizada'),
(5, 'Ressonância magnética'),
(6, 'Eletrocardiograma'),
(7, 'Colonscopia'),
(8, 'Mamografia'),
(9, 'Ultrassonografia'),
(10, 'Teste de glicemia');

INSERT INTO MEDICO (idMedico, nomeMedico) VALUES
(11, 'Katia Flávia dos Santos'),
(12, 'Ana Paula Silva'),
(13, 'Beatriz Vitória Martins Lima'),
(14, 'Maria Eduarda Rodrigues'),
(15, 'Luiza da Conceição Oliveira'),
(16, 'Marina Oliveira Santos'),
(17, 'Rafael Costa Pereira'),
(18, 'Juliana Silva Almeida'),
(19, 'Lucas Rodrigues Ferreira'),
(20, 'Mariana Santos Gomes'),
(21, 'Fernando Alves Monteiro'),
(22, 'Patrícia Lima da Silva'),
(23, 'Renato Souza Oliveira'),
(24, 'Tatiane Costa Ferreira'),
(25, 'João Pedro Alves Santos'),
(26, 'Isabela Mendes Rocha'),
(27, 'Vinícius Gonçalves Moraes'),
(28, 'Camila Oliveira Martins'),
(29, 'Gustavo Ribeiro Ferreira'),
(30, 'Natália Andrade Gomes'),
(31, 'Adriana Nunes Vieira'),
(32, 'Fábio Augusto Lima'),
(33, 'Larissa dos Anjos Ribeiro'),
(34, 'Diego Freitas Moreira'),
(35, 'Letícia Costa Fernandes'),
(36, 'André Luiz Mendes'),
(37, 'Bruna Caroline Silva'),
(38, 'Cláudio Henrique Souza'),
(39, 'Vanessa Oliveira Lima'),
(40, 'Rodrigo César Martins');

INSERT INTO ESPECIALIDADE (idEspecialidade, dscEspecialidade) VALUES
(10, 'Clínico geral'),
(20, 'Dermatologista'),
(30, 'Pediatra'),
(40, 'Ginecologista'),
(50, 'Dentista'),
(60, 'Cardiologista'),
(70, 'Neurologista'),
(80, 'Otorrinolaringologista'),
(90, 'Nutricionista'),
(100, 'Psiquiatra');

INSERT INTO AGENDA_MEDICO (FK_idDia, FK_idHorario, FK_idMedico) VALUES
(1, 10, 11),
(3, 20, 12),
(4, 31, 13),
(2, 11, 14),
(4, 25, 15),
(1, 15, 16),
(3, 18, 17),
(1, 25, 18),
(3, 23, 19),
(4, 32, 20),
(5, 44, 11),
(4, 17, 12),
(3, 31, 13),
(4, 37, 14),
(3, 29, 15),
(1, 24, 16),
(2, 15, 17),
(5, 20, 18),
(3, 28, 19),
(4, 13, 20);

INSERT INTO CADASTRO_MEDICO (FK_idUnidade, FK_idMedico, FK_idEspecialidade) VALUES
(16, 11, 10),
(22, 12, 20),
(34, 13, 30),
(42, 14, 40),
(54, 15, 50),
(66, 16, 60),
(22, 17, 70),
(80, 18, 80),
(42, 19, 90),
(34, 20, 100),
(10, 21, 10),
(12, 22, 20),
(14, 23, 30),
(18, 24, 40),
(20, 25, 50),
(24, 26, 60),
(28, 27, 70),
(30, 28, 80),
(36, 29, 90),
(38, 30, 100),
(40, 31, 10),
(44, 32, 20),
(46, 33, 30),
(50, 34, 40),
(52, 35, 50),
(56, 36, 60),
(60, 37, 70),
(62, 38, 80),
(64, 39, 90),
(68, 40, 100);

INSERT INTO OFERTA_VACINAS (statusDisp, FK_idUnidade, FK_idVac) VALUES
(1, 16, 14),
(1, 22, 3),
(0, 34, 8),
(1, 42, 12),
(1, 54, 19),
(1, 66, 7),
(1, 22, 5),
(1, 80, 1),
(0, 42, 18),
(1, 34, 10),
(1, 10, 9),
(1, 12, 2),
(1, 14, 16),
(0, 18, 13),
(1, 20, 6),
(1, 24, 17),
(1, 28, 11),
(1, 30, 4),
(1, 36, 15),
(1, 38, 7),
(1, 40, 14),
(0, 44, 3),
(0, 46, 8),
(1, 50, 19),
(1, 52, 12),
(1, 56, 10),
(1, 60, 5),
(1, 62, 1),
(0, 64, 6),
(1, 68, 2),
(1, 10, 17),
(1, 12, 15),
(0, 14, 11),
(1, 18, 18),
(1, 20, 13),
(1, 24, 9),
(1, 28, 4),
(1, 30, 16),
(1, 36, 8),
(1, 38, 14),
(1, 40, 19),
(1, 44, 7),
(1, 46, 5),
(1, 50, 3),
(1, 52, 18),
(1, 56, 1),
(0, 60, 12),
(1, 62, 9),
(1, 64, 15),
(1, 68, 10),
(1, 54, 6),
(1, 66, 4),
(1, 22, 17),
(1, 80, 2),
(0, 42, 11),
(1, 34, 16),
(1, 10, 13),
(1, 12, 19),
(1, 20, 7),
(1, 24, 11);

INSERT INTO AGENDAMENTO_CONSULTA (FK_idUsuario, FK_idUnidade, FK_idMedico, FK_idEspecialidade, FK_idHorario, dataConsulta) VALUES
(1, 10, 11, 10, 14, '2025-01-01'),
(3, 14, 12, 20, 24, '2025-11-03'),
(4, 16, 12, 20, 31, '2025-03-06'),
(5, 18, 17, 70, 41, '2025-04-07'),
(6, 20, 18, 80, 25, '2025-05-08'),
(7, 22, 11, 10, 22, '2025-06-09'),
(8, 24, 12, 20, 32, '2025-07-10'),
(9, 26, 13, 30, 11, '2025-08-13'),
(10, 28, 14, 40, 16, '2025-09-14'),
(11, 30, 15, 50, 18, '2025-10-15'),
(1, 10, 12, 20, 27, '2025-11-16'),
(2, 12, 13, 30, 11, '2025-12-17'),
(3, 14, 14, 40, 45, '2025-09-20'),
(4, 16, 15, 50, 42, '2025-01-21'),
(5, 18, 16, 60, 28, '2025-03-22'),
(6, 20, 17, 70, 18, '2025-02-23'),
(7, 22, 18, 80, 19, '2025-05-24'),
(8, 24, 19, 90, 25, '2025-06-27'),
(9, 26, 20, 100, 34, '2025-10-28'),
(10, 28, 11, 10, 40, '2025-01-29'),
(11, 30, 12, 20, 24, '2025-11-30'),
(1, 10, 15, 50, 20, '2025-02-02'),
(2, 12, 11, 10, 33, '2025-12-03'),
(3, 14, 12, 20, 46, '2025-04-04'),
(9, 26, 18, 80, 26, '2025-05-05'),
(10, 28, 19, 90, 27, '2025-06-06'),
(11, 30, 20, 100, 14, '2025-07-07'),
(1, 10, 16, 60, 13, '2025-08-10'),
(2, 12, 11, 10, 22, '2025-02-11'),
(3, 14, 12, 20, 12, '2025-02-12'),
(4, 16, 13, 30, 19, '2025-05-13'),
(5, 18, 14, 40, 13, '2025-08-14'),
(6, 20, 15, 50, 15, '2025-10-17'),
(7, 22, 16, 60, 18, '2025-12-18'),
(8, 24, 17, 70, 21, '2025-03-19'),
(9, 26, 18, 80, 35, '2025-02-20'),
(10, 28, 19, 90, 36, '2025-05-21'),
(11, 30, 20, 100, 37, '2025-05-24'),
(1, 10, 18, 80, 39, '2025-07-25'),
(2, 12, 11, 10, 10, '2025-05-30'),
(3, 14, 12, 20, 11, '2025-03-14'),
(4, 16, 13, 30, 27, '2025-04-12'),
(5, 18, 14, 40, 29, '2025-09-27');

INSERT INTO AGENDAMENTO_EXAME (FK_idUsuario, FK_idUnidade, FK_idExame, FK_idHorario, dataExame) VALUES
(3, 14, 3, 24, '2025-07-25'),
(4, 16, 4, 28, '2025-10-28'),
(5, 18, 5, 30, '2025-10-17'),
(6, 20, 6, 11, '2025-05-30'),
(7, 22, 7, 16, '2025-08-14'),
(8, 24, 8, 18, '2025-03-06'),
(9, 26, 9, 17, '2025-05-13'),
(10, 28, 10, 21, '2025-02-23'),
(11, 30, 1, 24, '2025-05-24'),
(1, 10, 1, 31, '2025-02-12'),
(2, 12, 2, 17, '2025-06-09'),
(3, 14, 3, 18, '2025-11-03'),
(4, 16, 4, 21, '2025-07-07'),
(5, 18, 5, 24, '2025-01-21'),
(6, 20, 6, 27, '2025-05-05'),
(7, 22, 7, 12, '2025-02-20'),
(8, 24, 8, 13, '2025-11-30'),
(9, 26, 9, 26, '2025-12-18'),
(10, 28, 10, 16, '2025-04-07'),
(11, 30, 1, 17, '2025-03-19'),
(1, 10, 1, 18, '2025-08-13'),
(2, 12, 2, 34, '2025-03-22'),
(3, 14, 3, 25, '2025-08-10'),
(4, 16, 4, 20, '2025-05-21'),
(5, 18, 5, 10, '2025-07-10'),
(6, 20, 6, 17, '2025-06-06'),
(7, 22, 7, 30, '2025-12-03'),
(8, 24, 8, 24, '2025-09-14'),
(9, 26, 9, 21, '2025-09-27'),
(10, 28, 10, 17, '2025-12-17'),
(11, 30, 1, 24, '2025-04-04'),
(1, 10, 1, 26, '2025-11-16'),
(2, 12, 2, 27, '2025-09-20'),
(3, 14, 3, 28, '2025-05-08'),
(4, 16, 4, 24, '2025-04-12'),
(5, 18, 5, 11, '2025-02-11'),
(6, 20, 6, 15, '2025-01-29'),
(7, 22, 7, 16, '2025-02-02'),
(8, 24, 8, 36, '2025-10-15'),
(9, 26, 9, 21, '2025-03-01'),
(10, 28, 10, 20, '2025-04-02'),
(11, 30, 1, 24, '2025-03-05'),
(1, 10, 1, 31, '2025-06-10'),
(2, 12, 2, 22, '2025-07-12'),
(3, 14, 3, 23, '2025-08-18'),
(4, 16, 4, 13, '2025-11-19'),
(5, 18, 5, 19, '2025-10-22');
