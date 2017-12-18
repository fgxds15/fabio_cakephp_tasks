
-- Tabela de Tasks
CREATE TABLE tasks (
    id int(11) unsigned NOT NULL auto_increment,
    nome varchar(50) NOT NULL,
    descricao text NOT NULL,
	arquivo varchar(100),
	created datetime NOT NULL , 
	modified datetime ,
    PRIMARY KEY (id)
) ENGINE=InnoDB;
