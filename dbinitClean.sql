
CREATE TABLE IF NOT EXISTS corsi (
  idcorso int AUTO_INCREMENT,
  nome varchar(20) NOT NULL,
  docente varchar(20) NOT NULL,
  anno int NOT NULL,
  PRIMARY KEY (idcorso)
) 

CREATE TABLE IF NOT EXISTS utenti (
  username varchar(20),
  password` varchar(20) NOT NULL,
  nome varchar(20) NOT NULL,
  cognome varchar(20) NOT NULL,
  PRIMARY KEY (username)
)

CREATE TABLE IF NOT EXISTS appunti (
  username varchar(20) NOT NULL,
  idcorso int(11) NOT NULL,
  lezione int(11) NOT NULL,
  titolo varchar(20) NOT NULL,
  testo text NOT NULL
)

ALTER TABLE `appunti`
  ADD CONSTRAINT `appunti_ibfk_1` FOREIGN KEY (`username`) REFERENCES `utenti` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appunti_ibfk_2` FOREIGN KEY (`idcorso`) REFERENCES `corsi` (`idcorso`) ON DELETE CASCADE ON UPDATE CASCADE;
;

