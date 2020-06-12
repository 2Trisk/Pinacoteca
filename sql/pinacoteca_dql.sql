SELECT d.nome_dipinto, a.nome_autore,a.cognome_autore,t.stile_artistico, d.anno_uscita, g.nome_collezione
FROM dipinto d
INNER JOIN autore a ON d.id_autore = a.id_autore
INNER JOIN tecnica t ON t.id_tecnica = d.id_tecnica
INNER JOIN collezione g ON g.id_collezione = d.id_collezione
ORDER BY d.anno_uscita;


SELECT d.nome_dipinto, a.nome_autore,a.cognome_autore,t.stile_artistico, d.anno_uscita FROM dipinto d
INNER JOIN autore a ON d.id_autore = a.id_autore
INNER JOIN tecnica t ON t.id_tecnica = d.id_tecnica
INNER JOIN collezione g ON g.id_collezione = d.id_collezione
WHERE g.nome_collezione = 'Collezione Bariano'
ORDER BY t.stile_artistico;