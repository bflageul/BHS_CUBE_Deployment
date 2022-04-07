DROP DATABASE IF EXISTS videgrenierenligne;
CREATE DATABASE videgrenierenligne;
USE videgrenierenligne;

CREATE USER webapplication@localhost IDENTIFIED BY "653rag9T";

GRANT ALL ON DATABASE videgrenierenligne.* TO webapplication@localhost;

SOURCE ./import.sql
