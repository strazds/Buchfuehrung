-- Datenbank erstellen
CREATE DATABASE Buchfuehrung;

-- Zur Datenbank wechseln
USE Buchfuehrung;

-- Tabelle für Konten erstellen
CREATE TABLE Konten (
    KontoID INT AUTO_INCREMENT PRIMARY KEY,
    KontoName VARCHAR(100) NOT NULL,
    KontoTyp VARCHAR(50) NOT NULL
);

-- Tabelle für Buchungssätze erstellen
CREATE TABLE Buchungssaetze (
    BuchungsID INT AUTO_INCREMENT PRIMARY KEY,
    Buchungsdatum DATE NOT NULL,
    Betrag DECIMAL(10, 2) NOT NULL,
    KontoID INT NOT NULL,
    FOREIGN KEY (KontoID) REFERENCES Konten(KontoID)
);
