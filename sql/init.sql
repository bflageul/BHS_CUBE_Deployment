CREATE DATABASE videgrenierenligne;
USE videgrenierenligne;

CREATE USER "webapplication" IDENTIFIED BY "653rag9T";

GRANT ALL ON DATABASE "videgrenierenligne" TO "webapplication";

SOURCE ./import.sql
