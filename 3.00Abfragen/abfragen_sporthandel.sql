-- 1. Erstellen Sie eine Abfrage zur Anzeige der Spalten „id“, „benennung“ der Tabelle „artikel“, Lieferanten, „ek_preis“, „vk_preis“, „lagerbestand“, sortiert nach der „id“ des Artikels! 

SELECT a.ARTIKEL_ID, a.BENENNUNG, l.FIRMA, a.EK_PREIS, a.VK_PREIS, a.LAGERBESTAND FROM artikel a
INNER JOIN lieferanten l ON a.LIEFERANTEN_ID = l.LIEFERANTEN_ID
ORDER BY a.ARTIKEL_ID;

-- 2. Geben Sie für alle Artikel des Lieferanten „Fischer …“ die Spalten „id“ und „benennung“ der Tabelle „artikel“ sortiert nach „id“-Artikel aus! 

SELECT a.ARTIKEL_ID, a.BENENNUNG FROM artikel a
INNER JOIN lieferanten l ON a.LIEFERANTEN_ID = l.LIEFERANTEN_ID
WHERE l.FIRMA LIKE 'Fischer%'
ORDER BY a.ARTIKEL_ID;

-- 3. Für alle Wassersportartikel sind die Spalten “id“ und „benennung“ der Tabelle „artikel“ sowie der Lieferant auszugeben. Die Anzeige soll primär nach dem Lieferanten und sekundär nach der „id“-Artikel sortiert sein!

SELECT a.ARTIKEL_ID, a.BENENNUNG, l.FIRMA FROM artikel a
INNER JOIN lieferanten l ON a.LIEFERANTEN_ID = l.LIEFERANTEN_ID
WHERE a.ARTIKEL_ID LIKE '8%'
ORDER BY l.FIRMA, a.ARTIKEL_ID;

-- 4. Je Artikel soll der Lagerwert inkl. Einkaufspreis ermittelt werden. Die Abfrage soll die Spalten „id“, „bennenung“, „ek_preis“, „lagerbestand“ und „LAGERWERT“ (lagerbestand * ek_preis) der Tabelle „artikel“ enthalten und nach der „id“ sortiert sein!

SELECT a.ARTIKEL_ID, a.BENENNUNG, a.EK_PREIS, a.LAGERBESTAND, SUM(a.EK_PREIS) * a.LAGERBESTAND Lagerwert FROM artikel a
GROUP BY a.BENENNUNG
ORDER BY a.ARTIKEL_ID;

-- 5. Ermitteln Sie den Lagerwert aller Wintersportartikel!

SELECT SUM(a.EK_PREIS * a.LAGERBESTAND) Lagerwert FROM artikel a
WHERE a.ARTIKEL_ID LIKE '1%';

-- 6. Erstellen Sie eine Liste aller Artikel, bei denen der Mindestbestand unterschritten wird. Die Abfrage soll die Felder „id“ und „benennung“ der Tabelle „artikel“, Firma, „strasse“, „hausnr“, „plz“, „stadt“, „land“, „min_bestand“ und „lagerbestand“ enthalten und primär nach dem Lieferanten und sekundär nach der Benennung sortiert sein!

SELECT a.ARTIKEL_ID, a.BENENNUNG, l.STRASSE, l.HAUSNR, o.ZIP_CODE, o.STADT, o.LAND, a.MIN_BESTAND, a.LAGERBESTAND FROM artikel a
INNER JOIN lieferanten l ON a.LIEFERANTEN_ID = l.LIEFERANTEN_ID
INNER JOIN orte o ON l.ORTE_ID = o.ORTE_ID
WHERE a.MIN_BESTAND > a.LAGERBESTAND
ORDER BY l.FIRMA, a.BENENNUNG;

-- 7. Für die Buchhaltung wird eine Liste benötigt, die alle Artikel enthält, welche bei Lieferanten im Ausland gekauft werden!

SELECT a.ARTIKEL_ID, a.BENENNUNG FROM artikel a
INNER JOIN lieferanten l ON a.LIEFERANTEN_ID = l.LIEFERANTEN_ID
INNER JOIN orte o ON l.ORTE_ID = o.ORTE_ID
WHERE o.LAND != 'A';

-- 8. Erstellen Sie eine Liste aller Lieferanten, von denen derzeit kein Artikel im Angebot aufscheint!

SELECT l.FIRMA FROM lieferanten l
LEFT JOIN artikel a ON l.LIEFERANTEN_ID = a.LIEFERANTEN_ID
WHERE a.LAGERBESTAND IS NULL;

-- 9. Für den Sommerabverkauf werden alle Wassersportartikel um 13% billiger angeboten. Erstellen Sie eine Liste aller Wassersportartikel mit „id“, „benennung“, „vk_preis“ sowie dem Abverkaufspreis!

SELECT a.ARTIKEL_ID, a.BENENNUNG, a.VK_PREIS, a.VK_PREIS * 0.87 Abverkaufpreis FROM artikel a
WHERE a.ARTIKEL_ID LIKE '8%';