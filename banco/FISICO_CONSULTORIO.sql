USE id17761744_lifesense;

CREATE TABLE consultorio (
  id_con INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  cnpj_con VARCHAR(20) NOT NULL,
  raz_con VARCHAR(115) NOT NULL,
  cep_con VARCHAR(15) NOT NULL,
  end_con VARCHAR(115) NOT NULL,
  tel_con VARCHAR(20) NOT NULL,
  email_con VARCHAR(45) NOT NULL
);

CREATE TABLE usuario (
  id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  cargo_user VARCHAR(70) NOT NULL,
  login_user VARCHAR(45) NOT NULL,
  senha_user VARCHAR(45) NOT NULL,
  consultorio_id_con INT NOT NULL,
  CONSTRAINT fk_id_con
  FOREIGN KEY (consultorio_id_con) REFERENCES consultorio (id_con)
  ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE sala (
  id_sala INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  espec_sala VARCHAR(75) NOT NULL,
  consultorio_id_con INT NOT NULL,
  CONSTRAINT fk_id_con2
  FOREIGN KEY (consultorio_id_con) REFERENCES consultorio (id_con)
  ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE medico (
  id_med INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  cpf_med VARCHAR(15) NOT NULL,
  nome_med VARCHAR(115) NOT NULL,
  nasc_med DATE NOT NULL,
  nac_med VARCHAR(45) NOT NULL,
  gen_med VARCHAR(25) NOT NULL,
  ocup_med VARCHAR(70) NOT NULL,
  end_med VARCHAR(115) NOT NULL,
  tel_med VARCHAR(20) NOT NULL,
  email_med VARCHAR(45) NOT NULL,
  sala_id_sala INT NOT NULL,
  consultorio_id_con INT NOT NULL,
  CONSTRAINT fk_id_sala
  FOREIGN KEY (sala_id_sala) REFERENCES sala (id_sala)
  ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT fk_id_con3
  FOREIGN KEY (consultorio_id_con) REFERENCES consultorio (id_con)
  ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE funcionario (
  id_func INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  cpf_func VARCHAR(15) NOT NULL,
  nome_func VARCHAR(115) NOT NULL,
  nasc_func DATE NOT NULL,
  nac_func VARCHAR(45) NOT NULL,
  gen_func VARCHAR(25) NOT NULL,
  ocup_func VARCHAR(70) NOT NULL,
  end_func VARCHAR(115) NOT NULL,
  tel_func VARCHAR(20) NOT NULL,
  email_func VARCHAR(45) NOT NULL,
  consultorio_id_con INT NOT NULL,
  CONSTRAINT fk_id_con4
  FOREIGN KEY (consultorio_id_con) REFERENCES consultorio (id_con)
  ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE paciente (
  id_pac INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  cpf_pac VARCHAR(15) NOT NULL,
  nome_pac VARCHAR(115) NOT NULL,
  nasc_pac DATE NOT NULL,
  nac_pac VARCHAR(45) NOT NULL,
  gen_pac VARCHAR(25) NOT NULL,
  ocup_pac VARCHAR(45) NOT NULL,
  end_pac VARCHAR(115) NOT NULL,
  tel_pac VARCHAR(20) NOT NULL,
  email_pac VARCHAR(45) NOT NULL,
  consultorio_id_con INT NOT NULL,
  CONSTRAINT fk_id_con5
  FOREIGN KEY (consultorio_id_con) REFERENCES consultorio (id_con)
  ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE consulta (
  id_consult INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  data_consult DATE NOT NULL,
  hora_consult TIME NOT NULL,
  consultorio_id_con INT NOT NULL,
  sala_id_sala INT NOT NULL,
  medico_id_med INT NOT NULL,
  CONSTRAINT fk_id_con6
  FOREIGN KEY (consultorio_id_con) REFERENCES consultorio (id_con)
  ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT fk_id_sala2
  FOREIGN KEY (sala_id_sala) REFERENCES sala (id_sala)
  ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT fk_id_med
  FOREIGN KEY (medico_id_med) REFERENCES medico (id_med)
  ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE documentacao (
  id_doc INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  tipo_doc VARCHAR(45) NOT NULL,
  data_doc DATE NOT NULL,
  hora_doc TIME NOT NULL,
  desc_doc VARCHAR(2000) NOT NULL,
  consulta_id_consult INT NOT NULL,
  CONSTRAINT fk_id_consult
  FOREIGN KEY (consulta_id_consult) REFERENCES consulta (id_consult)
  ON DELETE CASCADE ON UPDATE CASCADE
);