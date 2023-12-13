USE `user2daw_BD2-06`;

CREATE TABLE Admin (
    id INT NOT NULL,
    correo VARCHAR(40) NOT NULL,
    pasw VARCHAR(12) NOT NULL,
    nombre VARCHAR(20) NOT NULL,
    perfil TINYINT NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB CHARSET=utf8mb4;

INSERT INTO Admin (id,correo,pasw,nombre,perfil) VALUES
(1,'correo1@gmailcom','1234','admin',0),
(2,'correo2@gmailcom','1234','usuario1',1),
(3,'correo3@gmailcom','1234','usuario2',2),
(4,'correo4@gmailcom','1234','usuario3',3)