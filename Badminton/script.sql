CREATE TABLE Comentarios (
  idComentarios INT NOT NULL auto_increment,
  nome VARCHAR(45),
  turma VARCHAR(45),
  comentario VARCHAR(90),
  PRIMARY KEY (idComentarios));

CREATE TABLE Respostas(
  idRespostas INT NOT NULL auto_increment,
  nome VARCHAR(45),
  turma VARCHAR(45),
  Resposta VARCHAR(90),
  idComentarios INT,
  CONSTRAINT fk_Comentario_Resposta FOREIGN KEY (idComentarios)
  REFERENCES Comentarios (idComentarios)
  ON DELETE CASCADE
  ON UPDATE CASCADE,
  PRIMARY KEY (idRespostas));

