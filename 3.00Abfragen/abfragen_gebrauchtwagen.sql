-- 1) Erstellen Sie eine Liste mit den Modellen pro Marke, aufsteigend sortiert nach Verkaufspreisen, Marke und Modell! Die Felder „vk_preis“, „marke“ und „modell“ sind 
-- auszugeben!

SELECT a.VK_PREIS, h.MARKE, a.MODELL FROM autos a
INNER JOIN hersteller h ON a.HERSTELLER_ID = h.HERSTELLER_ID
ORDER BY a.VK_PREIS;

-- 2) Erstellen Sie eine absteigend sortierte Liste der vorhandenen Marken inkl. der zugehörigen Modelle, wobei diese nur einmal anzuführen sind.

SELECT DISTINCT h.MARKE, a.MODELL FROM hersteller h
INNER JOIN autos a ON h.HERSTELLER_ID = a.HERSTELLER_ID;

-- 3) Erstellen Sie eine Liste aller Kombis deutscher Marken! Auszugeben sind die Spalten „land“, „kategorie“, „marke“, „modell“ und „vk_preis“, aufsteigend sortiert nach „marke“ und „vk_preis“.

SELECT l.LAND, k.KATEGORIE, h.MARKE, a.MODELL, a.VK_PREIS FROM hersteller h
INNER JOIN autos a ON h.HERSTELLER_ID = a.HERSTELLER_ID
INNER JOIN kategorien k ON a.KATEGORIE_ID = a.KATEGORIE_ID
INNER JOIN laender l ON h.LAENDER_ID = l.LAENDER_ID
WHERE l.LAND = 'Deutschland' and k.KATEGORIE = 'Kombi'
ORDER BY h.MARKE, a.VK_PREIS

-- 4) Für die Diebstahlversicherung wird eine Liste mit dem Wert der Fahrzeuge benötigt. Dafür wird pro Marke die Summe aller Einkaufswerte benötigt. Geben Sie das Ergebnis aufsteigend sortiert nach dem Einkaufswert und Marke aus. Die Spalte für die Summe der Einkaufswerte ist als „EINKAUFSWERT“ anzuzeigen!

SELECT SUM(a.EK_PREIS) Einkaufswert, h.MARKE FROM hersteller h
INNER JOIN autos a ON h.HERSTELLER_ID = a.HERSTELLER_ID
GROUP BY h.MARKE;

-- 5) In der Datenbank ist die Leistung der Fahrzeuge in kW angegeben. Für die Verkaufsliste soll die Leistung auch in PS angegeben werden! Sortieren Sie diese Abfrage nach Modell und Verkaufspreisen (1 PS = 0,736 kW). Auszugeben sind die Felder für Marke, Modell, kw, PS und Verkaufspreis!

SELECT h.MARKE, a.MODELL, a.KW, ROUND((a.KW * 1.3586), 2) PS FROM autos a
INNER JOIN hersteller h ON a.HERSTELLER_ID = h.HERSTELLER_ID;

-- 6) Erstellen Sie eine Preisliste bestehend aus Marke, Modell, kw, Hubraum, Baujahr und Verkaufspreis ALLER angebotenen Autos. Der Verkaufspreis darf in diesen Fällen nicht NULL sein. Die Ausgabe erfolgt aufsteigend sortiert nach Marke, Modell und Verkaufspreis!

SELECT h.MARKE, a.MODELL, a.KW, a.HUBRAUM, a.BAUJAHR, a.VK_PREIS FROM autos a
INNER JOIN hersteller h ON a.HERSTELLER_ID = h.HERSTELLER_ID
WHERE a.VK_PREIS IS NOT NULL;

-- 7) Schränken Sie die vorhergehende Abfrage zusätzlich auf benzinbetriebene Fahrzeuge ein!

SELECT h.MARKE, a.MODELL, a.KW, a.HUBRAUM, a.BAUJAHR, a.VK_PREIS FROM autos a
INNER JOIN hersteller h ON a.HERSTELLER_ID = h.HERSTELLER_ID
WHERE a.VK_PREIS IS NOT NULL and a.MOTORENTYP = 'Benzin';

-- 8) Erstellen Sie eine aufsteigend sortierte Liste jener Marken, von denen keine Autos vorhanden sind!

SELECT h.MARKE FROM hersteller h
LEFT JOIN autos a ON h.HERSTELLER_ID = a.HERSTELLER_ID
WHERE a.AUTO_ID IS NULL;