/* Lógico_1: */

CREATE TABLE LOGIN_USUARIO (
    idUsuario INT PRIMARY KEY,
    senha VARCHAR(32),
    email VARCHAR(40),
    cartaoSus VARCHAR(30),
    nomeUsuario VARCHAR(40),
    telUsuario VARCHAR(20),
    cpfUsuario VARCHAR(15),
);

CREATE TABLE AGENDAMENTO_CONSULTA (
    FK_LOGIN_USUARIO_idLogin INT,
    FK_LOGIN_USUARIO_idUsuario INT,
    FK_UNIDADE_idUnidade INT,
    FK_PROFISSIONAL_idProfissional INT,
    FK_ESPECIALIDADE_idEspecialidade INT,
    FK_HORARIO_idHorario INT
);

CREATE TABLE HORARIO (
    idHorario INT PRIMARY KEY,
    dscHorario VARCHAR(10)
);

CREATE TABLE DIA_SEMANA (
    idDia INT PRIMARY KEY,
    dscDia VARCHAR(10)
);

CREATE TABLE AGENDA_MEDICO (
    FK_DIA_SEMANA_idDia INT,
    FK_HORARIO_idHorario INT,
    FK_PROFISSIONAL_idProfissional INT
);

CREATE TABLE OFERTA_VACINAS (
    statusDisp INT,
    FK_UNIDADE_idUnidade INT,
    FK_VACINA_idVac INT
);

CREATE TABLE EXAME (
    idExame INT PRIMARY KEY,
    nomeExame VARCHAR(32)
);

CREATE TABLE AGENDAMENTO_EXAME (
    FK_HORARIO_idHorario INT,
    FK_UNIDADE_idUnidade INT,
    FK_LOGIN_USUARIO_idLogin INT,
    FK_LOGIN_USUARIO_idUsuario INT,
    FK_EXAME_idExame INT
);

CREATE TABLE UNIDADE (
    telUnidade VARCHAR(20),
    idUnidade INT PRIMARY KEY,
    hrFuncionamento VARCHAR(15),
    nomeUnidade VARCHAR(40),
    localUnidade VARCHAR(50)
);

CREATE TABLE PROFISSIONAL (
    idProfissional INT PRIMARY KEY,
    nomeProfissional VARCHAR(50)
);

CREATE TABLE ESPECIALIDADE (
    idEspecialidade INT PRIMARY KEY,
    dscEspecialidade varchar(40)
);

CREATE TABLE VACINA (
    numDoses VARCHAR(30),
    idVac INT PRIMARY KEY,
    nomeVac VARCHAR(40),
    dscIdade VARCHAR(60)
);

CREATE TABLE CADASTRO_MEDICO (
    fk_UNIDADE_idUnidade INT,
    fk_PROFISSIONAL_idProfissional INT,
    fk_ESPECIALIDADE_idEspecialidade INT
);
 
ALTER TABLE AGENDAMENTO_CONSULTA ADD CONSTRAINT FK_AGENDAMENTO_CONSULTA_1
    FOREIGN KEY (FK_LOGIN_USUARIO_idLogin, FK_LOGIN_USUARIO_idUsuario)
    REFERENCES LOGIN_USUARIO (idLogin, idUsuario)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_CONSULTA ADD CONSTRAINT FK_AGENDAMENTO_CONSULTA_2
    FOREIGN KEY (FK_UNIDADE_idUnidade)
    REFERENCES UNIDADE (idUnidade)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_CONSULTA ADD CONSTRAINT FK_AGENDAMENTO_CONSULTA_3
    FOREIGN KEY (FK_PROFISSIONAL_idProfissional)
    REFERENCES PROFISSIONAL (idProfissional)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_CONSULTA ADD CONSTRAINT FK_AGENDAMENTO_CONSULTA_4
    FOREIGN KEY (FK_ESPECIALIDADE_idEspecialidade)
    REFERENCES ESPECIALIDADE (idEspecialidade)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_CONSULTA ADD CONSTRAINT FK_AGENDAMENTO_CONSULTA_5
    FOREIGN KEY (FK_HORARIO_idHorario)
    REFERENCES HORARIO (idHorario)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDA_MEDICO ADD CONSTRAINT FK_AGENDA_MEDICO_1
    FOREIGN KEY (FK_DIA_SEMANA_idDia)
    REFERENCES DIA_SEMANA (idDia)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDA_MEDICO ADD CONSTRAINT FK_AGENDA_MEDICO_2
    FOREIGN KEY (FK_HORARIO_idHorario)
    REFERENCES HORARIO (idHorario)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDA_MEDICO ADD CONSTRAINT FK_AGENDA_MEDICO_3
    FOREIGN KEY (FK_PROFISSIONAL_idProfissional)
    REFERENCES PROFISSIONAL (idProfissional)
    ON DELETE CASCADE;
 
ALTER TABLE OFERTA_VACINAS ADD CONSTRAINT FK_OFERTA_VACINAS_1
    FOREIGN KEY (FK_UNIDADE_idUnidade)
    REFERENCES UNIDADE (idUnidade)
    ON DELETE CASCADE;
 
ALTER TABLE OFERTA_VACINAS ADD CONSTRAINT FK_OFERTA_VACINAS_2
    FOREIGN KEY (FK_VACINA_idVac)
    REFERENCES VACINA (idVac)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_EXAME ADD CONSTRAINT FK_AGENDAMENTO_EXAME_1
    FOREIGN KEY (FK_HORARIO_idHorario)
    REFERENCES HORARIO (idHorario)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_EXAME ADD CONSTRAINT FK_AGENDAMENTO_EXAME_2
    FOREIGN KEY (FK_UNIDADE_idUnidade)
    REFERENCES UNIDADE (idUnidade)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_EXAME ADD CONSTRAINT FK_AGENDAMENTO_EXAME_3
    FOREIGN KEY (FK_LOGIN_USUARIO_idLogin, FK_LOGIN_USUARIO_idUsuario)
    REFERENCES LOGIN_USUARIO (idLogin, idUsuario)
    ON DELETE CASCADE;
 
ALTER TABLE AGENDAMENTO_EXAME ADD CONSTRAINT FK_AGENDAMENTO_EXAME_4
    FOREIGN KEY (FK_EXAME_idExame)
    REFERENCES EXAME (idExame)
    ON DELETE CASCADE;
 
ALTER TABLE CADASTRO_MEDICO ADD CONSTRAINT FK_CADASTRO_MEDICO_1
    FOREIGN KEY (fk_UNIDADE_idUnidade)
    REFERENCES UNIDADE (idUnidade);
 
ALTER TABLE CADASTRO_MEDICO ADD CONSTRAINT FK_CADASTRO_MEDICO_2
    FOREIGN KEY (fk_PROFISSIONAL_idProfissional)
    REFERENCES PROFISSIONAL (idProfissional);
 
ALTER TABLE CADASTRO_MEDICO ADD CONSTRAINT FK_CADASTRO_MEDICO_3
    FOREIGN KEY (fk_ESPECIALIDADE_idEspecialidade)
    REFERENCES ESPECIALIDADE (idEspecialidade);
