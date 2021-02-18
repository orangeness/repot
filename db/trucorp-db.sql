CREATE DATABASE IF NOT EXISTS Trucorp;

USE Trucorp;

CREATE TABLE users (`ID(PK)` varchar(10), `Nama` varchar(20), `Kantor(Pusat / Cabang)` varchar(20));

INSERT INTO users VALUES
('1', 'Budi', 'Jakarta'), 
('2', 'Budu', 'Bandung'),
 ('3', 'Budo', 'Korea Utara');