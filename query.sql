-- Stock más alto de la tabla productos
SELECT * FROM productos WHERE stock IN (SELECT max(stock) From productos);

-- Prducto que mas se ha vendido
SELECT * FROM productos WHERE cant_vendida IN (SELECT max(cant_vendida) From productos);