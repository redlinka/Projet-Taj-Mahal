CREATE TABLE SECTION (code_section CHAR(7) PRIMARY KEY, nom_section VARCHAR(50));
CREATE TABLE CONTENU (num_contenu INT PRIMARY KEY, code_section CHAR(7), ordre VARCHAR(50), FOREIGN KEY (code_section) REFERENCES SECTION(code_section));
CREATE TABLE TRADUCTION (num_contenu INT, langue CHAR(2), texte TEXT, PRIMARY KEY (num_contenu, langue), FOREIGN KEY (num_contenu) REFERENCES CONTENU(num_contenu));
CREATE TABLE ADMIN (nom VARCHAR(50), login VARCHAR(50) PRIMARY KEY, password TEXT);

INSERT INTO section (code_section, nom_section) VALUES ('H-TITLE', 'Home title');
INSERT INTO section (code_section, nom_section) VALUES ('H-QUOTE', 'Introduction Quote');
INSERT INTO section (code_section, nom_section) VALUES ('HISTORY', 'History section');
INSERT INTO section (code_section, nom_section) VALUES ('COUPLE', 'Imperial couple section');
INSERT INTO section (code_section, nom_section) VALUES ('VISITOR', 'Remarkable visitors section');

INSERT INTO section (code_section, nom_section) VALUES ('C-TITLE', 'Chronology title');
INSERT INTO section (code_section, nom_section) VALUES ('1612', 'Couple wedding');
INSERT INTO section (code_section, nom_section) VALUES ('1526', 'Moghol empire foundation');
INSERT INTO section (code_section, nom_section) VALUES ('1628', 'Shah Jahan obtains the throne');
INSERT INTO section (code_section, nom_section) VALUES ('1631', 'Death of Mumtaz Mahal');
INSERT INTO section (code_section, nom_section) VALUES ('1632','Beginning of the construction of Taj Mahal');
INSERT INTO section (code_section, nom_section) VALUES ('1648', 'End of the construction of the main mausoleum');
INSERT INTO section (code_section, nom_section) VALUES ('1666', 'Death of Shah Jahan');
INSERT INTO section (code_section, nom_section) VALUES ('1857', 'End of Moghol Empire');
INSERT INTO section (code_section, nom_section) VALUES ('1908', 'Restauration of the Taj Mahal');
INSERT INTO section (code_section, nom_section) VALUES ('1983', 'Taj Mahal recognized by UNESCO');

/*
$plainPassword = "UNESCO123";
$username = "maxauren@gmail.com";
$hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

$stmt = $cnx->prepare("INSERT INTO admin (nom, login, password) VALUES (:nom, :user, :pass)");
$stmt->execute([
    'nom' => 'Max', 
    'user' => $username,
    'pass' => $hashedPassword
]);
*/
