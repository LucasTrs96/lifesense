USE apmed;

DROP DATABASE apmed;

INSERT INTO consultorio (cnpj_con, raz_con, cep_con, end_con, tel_con, email_con)
			VALUES ('1234567891011', 'Consultorio 1', '12345678', 'Brasília-DF', '12345678', 'email@email.com');

INSERT INTO consultorio (cnpj_con, raz_con, cep_con, end_con, tel_con, email_con)
			VALUES ('1110987654321', 'Consultorio 2', '87654321', 'São Paulo-SP', '87654321', 'email2@email2.com');

INSERT INTO consultorio (cnpj_con, raz_con, cep_con, end_con, tel_con, email_con)
			VALUES ('1234561110987', 'Consultorio 3', '12387456', 'Goiânia-GO', '65374812', 'email3@email3.com');

INSERT INTO usuario (cargo_user, login_user, senha_user, consultorio_id_con)
			VALUES ('Administrativo', 'Administrador 1', 'administrador_1', 1);
            
INSERT INTO usuario (cargo_user, login_user, senha_user, consultorio_id_con)
			VALUES ('Atendimento', 'Atendente 1', 'atendente_1', 2);
            
INSERT INTO usuario (cargo_user, login_user, senha_user, consultorio_id_con)
			VALUES ('Médico', 'Médico 1', 'medico_1', 3);

INSERT INTO usuario (cargo_user, login_user, senha_user, consultorio_id_con)
			VALUES ('Paciente', 'Paciente 1', 'paciente_1', 1);

SELECT * FROM consultorio;

SELECT * FROM sala;

SELECT * FROM consulta;

SELECT * FROM documentacao;

SELECT * FROM usuario;
            
SELECT u.id_user, u.login_user FROM usuario AS u WHERE 'Administrativo' IN (cargo_user);

DELETE FROM usuario WHERE id_user = 1;

SELECT u.id_user, u.login_user FROM usuario AS u WHERE cargo_user LIKE "Méd%" AND senha_user LIKE "med%";

SELECT * FROM usuario WHERE cargo_user = 'Administrativo' AND login_user = 'Administrador 1' AND senha_user = 'administrador_1';

SELECT c.*, s.* FROM consultorio AS c 
				INNER JOIN sala AS s 
				WHERE s.consultorio_id_con = c.id_con GROUP BY c.id_con;
                
SELECT c1.*, s.*, m.*, c2.* FROM consultorio AS c1 
                INNER JOIN sala AS s 
                INNER JOIN medico AS m 
                INNER JOIN consulta AS c2 
                ON c2.consultorio_id_con = c1.id_con 
                AND c2.sala_id_sala = s.id_sala 
                AND c2.medico_id_med = m.id_med GROUP BY c2.id_consult;

SELECT * FROM usuario ORDER BY cargo_user;