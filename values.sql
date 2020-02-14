INSERT INTO `corsi` (`idcorso`, `nome`, `docente`, `anno`) 
VALUES 
	(NULL, 'ASD mod.1', 'A.Raffaetà', '2'),
	(NULL, 'ASD mod.2', 'M.Pelillo', '2'),
	(NULL, 'BD mod.1', 'A.Raffaetà', '2'),
	(NULL, 'BD mod.2', 'W.Quattrociocchi', '2'),
	(NULL, 'PO mod.1', 'A.Albarelli', '2'),
	(NULL, 'PO mod.2', 'A.Spanò', '2'),
	(NULL, 'RO', 'G.Fasano', '3'),
	(NULL, 'IS', 'A.Cortesi', '3'),
	(NULL, 'AL', 'A.Salibra', '1'),
	(NULL, 'MD', 'A.Salibra', '2');


INSERT INTO `utenti` (`username`, `password`, `nome`, `cognome`) 
VALUES 
	('nasi', 'root', 'Monan', 'Nasir'),
	('mich', 'root', 'Michelle', 'Pokem'),
	('phil', 'root', 'Filippo', 'Di Ferro'),
	('davd', 'root', 'Davide', 'Guidobene'),
	('mike', 'root', 'Michele', 'Spolaor');

INSERT INTO `appunti` (`username`, `idcorso`, `lezione`, `titolo`, `testo`)
VALUES
	('nasi', '1', '1', 'Alberi binari', 'testo di prova: lezione su Alberi binari'),
	('nasi', '1', '2', 'BST', 'testo di prova: lezione su BST'),
	('nasi', '1', '3', 'Operazioni su BST', 'testo di prova: lezione su operazioni su BST'),
	('nasi', '1', '4', 'MergeSort', 'testo di prova: lezione su MergeSort'),
	('mich', '1', '1', 'Alberi binari', 'testo di prova: lezione su Alberi binari'),
	('mich', '1', '2', 'BST', 'testo di prova: lezione su BST'),
	('mich', '1', '3', 'Operazioni su BST', 'testo di prova: lezione su operazioni su BST'),
	('mich', '1', '4', 'MergeSort', 'testo di prova: lezione su MergeSort'),
	('davd', '1', '1', 'Alberi binari', 'testo di prova: lezione su Alberi binari'),
	('davd', '1', '2', 'BST', 'testo di prova: lezione su BST'),
	('davd', '1', '3', 'Operazioni su BST', 'testo di prova: lezione su operazioni su BST'),
	('davd', '1', '4', 'MergeSort', 'testo di prova: lezione su MergeSort'),
	('phil', '1', '1', 'Alberi binari', 'testo di prova: lezione su Alberi binari'),
	('phil', '1', '2', 'BST', 'testo di prova: lezione su BST'),
	('phil', '6', '1', 'Lambda exp', 'testo di prova: lezione su operazioni su Lambda exp'),
	('phil', '6', '2', 'Generics', 'testo di prova: lezione su Generics'),
	('nasi', '4', '1', 'Normalizzazione', 'testo di prova: lezione su Normalizzazione'),
	('nasi', '4', '2', '3NF', 'testo di prova: lezione su 3NF'),
	('nasi', '3', '1', 'Modello concettuale', 'testo di prova: lezione su Modello concettuale'),
	('nasi', '3', '2', 'Algebra relazionale', 'testo di prova: lezione su Algebra relazionale'),
	('nasi', '8', '1', 'Requisiti di progettazione', 'testo di prova: lezione su requisiti di progettazione'),
	('nasi', '8', '2', 'Piano di testing', 'testo di prova: lezione su piano di testing'),
	('nasi', '8', '3', 'Requisiti Funzionali', 'testo di prova: lezione su Requisiti Funzionali'),
	('nasi', '8', '4', 'Formazione Team', 'testo di prova: lezione su Formazione Team');

