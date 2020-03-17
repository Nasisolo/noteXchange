-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 18, 2020 alle 11:22
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notexchange`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `appunti`
--

CREATE TABLE `appunti` (
  `username` varchar(20) NOT NULL,
  `idcorso` int(11) NOT NULL,
  `lezione` int(11) NOT NULL,
  `titolo` varchar(20) NOT NULL,
  `testo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `appunti`
--

INSERT INTO `appunti` (`username`, `idcorso`, `lezione`, `titolo`, `testo`) VALUES
('nasi', 10, 1, 'Combinatoria', 'testo di prova: lezione su operazioni su Combinatoria'),
('nasi', 1, 1, 'Alberi binari', 'testo di prova: lezione su Alberi binari'),
('nasi', 1, 2, 'BST', 'testo di prova: lezione su BST'),
('nasi', 1, 3, 'Operazioni su BST', 'testo di prova: lezione su operazioni su BST'),
('nasi', 1, 4, 'MergeSort', 'testo di prova: lezione su MergeSort'),
('mich', 1, 1, 'Alberi binari', 'testo di prova: lezione su Alberi binari'),
('mich', 1, 2, 'BST', 'testo di prova: lezione su BST'),
('mich', 1, 3, 'Operazioni su BST', 'testo di prova: lezione su operazioni su BST'),
('mich', 1, 4, 'MergeSort', 'testo di prova: lezione su MergeSort'),
('davd', 1, 1, 'Alberi binari', 'testo di prova: lezione su Alberi binari'),
('davd', 1, 2, 'BST', 'testo di prova: lezione su BST'),
('davd', 1, 3, 'Operazioni su BST', 'testo di prova: lezione su operazioni su BST'),
('davd', 1, 4, 'MergeSort', 'testo di prova: lezione su MergeSort'),
('phil', 1, 1, 'Alberi binari', 'testo di prova: lezione su Alberi binari'),
('phil', 1, 2, 'BST', 'testo di prova: lezione su BST'),
('phil', 6, 1, 'Lambda exp', 'testo di prova: lezione su operazioni su Lambda exp'),
('phil', 6, 2, 'Generics', 'testo di prova: lezione su Generics'),
('nasi', 4, 1, 'Normalizzazione', 'testo di prova: lezione su Normalizzazione'),
('nasi', 4, 2, '3NF', 'testo di prova: lezione su 3NF'),
('nasi', 3, 1, 'Modello concettuale', 'testo di prova: lezione su Modello concettuale'),
('nasi', 3, 2, 'Algebra relazionale', 'testo di prova: lezione su Algebra relazionale'),
('nasi', 8, 1, 'Requisiti di progett', 'testo di prova: lezione su requisiti di progettazione'),
('nasi', 8, 2, 'Piano di testing', 'testo di prova: lezione su piano di testing'),
('nasi', 8, 3, 'Requisiti Funzionali', 'testo di prova: lezione su Requisiti Funzionali'),
('nasi', 8, 4, 'Formazione Team', 'testo di prova: lezione su Formazione Team'),
('nasi', 10, 6, 'Autovettori', 'testo di prova: lezione sugli autovettori'),
('nasi', 10, 6, 'Autovettori', 'questa lezione era sugli Autovettori');

-- --------------------------------------------------------

--
-- Struttura della tabella `corsi`
--

CREATE TABLE `corsi` (
  `idcorso` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `docente` varchar(20) NOT NULL,
  `anno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `corsi`
--

INSERT INTO `corsi` (`idcorso`, `nome`, `docente`, `anno`) VALUES
(1, 'ASD mod.1', 'A.Raffaetà', 2),
(2, 'ASD mod.2', 'M.Pelillo', 2),
(3, 'BD mod.1', 'A.Raffaetà', 2),
(4, 'BD mod.2', 'W.Quattrociocchi', 2),
(5, 'PO mod.1', 'A.Albarelli', 2),
(6, 'PO mod.2', 'A.Spanò', 2),
(7, 'RO', 'G.Fasano', 3),
(8, 'IS', 'A.Cortesi', 3),
(9, 'AL', 'A.Salibra', 1),
(10, 'MD', 'A.Salibra', 2),
(11, 'Corso di Prova', 'Docente di prova', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`username`, `password`, `nome`, `cognome`) VALUES
('davd', 'root', 'Davide', 'Guidobene'),
('mich', 'root', 'Michelle', 'Pokem'),
('mike', 'root', 'Michele', 'Spolaor'),
('nasi', 'root', 'Monan', 'Nasir'),
('phil', 'root', 'Filippo', 'Di Ferro');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `appunti`
--
ALTER TABLE `appunti`
  ADD KEY `username` (`username`),
  ADD KEY `idcorso` (`idcorso`),
  ADD KEY `idcorso_2` (`idcorso`,`username`) USING BTREE;

--
-- Indici per le tabelle `corsi`
--
ALTER TABLE `corsi`
  ADD PRIMARY KEY (`idcorso`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `corsi`
--
ALTER TABLE `corsi`
  MODIFY `idcorso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `appunti`
--
ALTER TABLE `appunti`
  ADD CONSTRAINT `appunti_ibfk_1` FOREIGN KEY (`username`) REFERENCES `utenti` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appunti_ibfk_2` FOREIGN KEY (`idcorso`) REFERENCES `corsi` (`idcorso`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
