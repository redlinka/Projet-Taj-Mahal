CREATE TABLE SECTION (code_section CHAR(7) PRIMARY KEY, nom_section VARCHAR(50));
CREATE TABLE CONTENU (num_contenu INT PRIMARY KEY, code_section CHAR(7), ordre VARCHAR(50), FOREIGN KEY (code_section) REFERENCES SECTION(code_section));
CREATE TABLE TRADUCTION (num_contenu INT, langue CHAR(2), texte TEXT, PRIMARY KEY (num_contenu, langue), FOREIGN KEY (num_contenu) REFERENCES CONTENU(num_contenu));

