-- O nome do Banco de dados:
-- Nome: console
CREATE TABLE marca (
  id_marca INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_marca VARCHAR(45) NULL,
  PRIMARY KEY(id_marca)
);

CREATE TABLE modelo (
  id_modelo INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  marca_id_marca INTEGER UNSIGNED NOT NULL,
  nome_modelo VARCHAR(45) NULL,
  cor_modelo VARCHAR(20) NULL,
  armazenamento_modelo	VARCHAR(45) NULL,
  
  PRIMARY KEY(id_modelo),
  INDEX modelo_FKIndex1(marca_id_marca)
);


