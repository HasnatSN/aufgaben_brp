-- 1. Wie viele Spiele fanden am 27.01.2019 statt? Verwenden Sie bei der Anzeige das Alias 
-- „Anzahl“!

SELECT COUNT(s.DATUM) Anzahl FROM spielplaene s
WHERE s.DATUM = '2019-01-27';

-- 2. Wie viele Spiele haben pro Spieltag stattgefunden? Geben Sie das Datum und die Anzahl der Spiele an!

SELECT s.DATUM, COUNT(s.DATUM) Anzahl FROM spielplaene s
GROUP BY s.DATUM;

-- 3. Welche Ligen sind in den Spielplänen abgebildet? Bei der Ausgabe sind doppelte Einträge zu vermeiden!

SELECT l.LIGA FROM ligen l
LEFT JOIN spielplaene sl ON l.LIGEN_ID = sl.LIGEN_ID
WHERE sl.SPIELPLAENE_ID IS NOT NULL
GROUP BY l.LIGA;

-- 4. Welche Ligen wurden in den Spielplänen nicht berücksichtigt? 

SELECT l.LIGA FROM ligen l
LEFT JOIN spielplaene sp ON l.LIGEN_ID = sp.LIGEN_ID
WHERE sp.SPIELPLAENE_ID IS NULL
GROUP BY l.LIGA;

-- 5. Welche Vereine spielten am 27.01.2019 gegeneinander? Die Vereine sind in absteigender Reihenfolge auszugeben!

SELECT v.VEREIN FROM details_jt djt
LEFT JOIN spielplaene sp ON djt.SPIELPLAENE_ID = sp.SPIELPLAENE_ID
LEFT JOIN vereine v ON djt.VEREINE_ID = v.VEREINE_ID
WHERE sp.DATUM = '2019-01-27'
GROUP BY v.VEREIN
ORDER BY v.VEREIN DESC;

-- 6. Welche Spieler schossen bisher ein Tor?

SELECT s.LAST_NAME Spieler, r.Regel FROM details_jt djt
LEFT JOIN spieler s ON djt.SPIELER_ID = s.SPIELER_ID
LEFT JOIN ereignisse_jt ejt ON djt.DETAILS_ID = ejt.DETAILS_ID
LEFT JOIN regeln r ON ejt.REGELN_ID = r.REGELN_ID
WHERE r.REGEL = 'Tor'
GROUP BY s.LAST_NAME;

-- 7. Welcher Verein hatte bisher spielfrei? 

SELECT v.Verein FROM vereine v
LEFT JOIN details_jt djt ON v.VEREINE_ID = djt.VEREINE_ID
WHERE djt.SPIELPLAENE_ID IS NULL;

-- 8. Welche Spieler hatten noch keinen Einsatz? 

SELECT s.LAST_NAME FROM spieler s
LEFT JOIN details_jt djt ON s.SPIELER_ID = djt.SPIELER_ID
WHERE djt.SPIELPLAENE_ID IS NULL
GROUP BY s.SPIELER_ID;

-- 9. Geben Sie die Zunamen der Spieler aus, welche mit einer gelben Karte verwarnt wurden! Die Reihung erfolgt absteigend nach der Anzahl an gelben Karten! 

SELECT s.LAST_NAME, r.REGEL FROM spieler s
LEFT JOIN details_jt djt ON s.SPIELER_ID = djt.SPIELER_ID
LEFT JOIN ereignisse_jt ejt ON djt.DETAILS_ID = ejt.EREIGNISSE_ID
LEFT JOIN regeln r ON ejt.REGELN_ID = r.REGELN_ID
WHERE r.REGEL = 'Gelbe Karte'
GROUP BY s.LAST_NAME;