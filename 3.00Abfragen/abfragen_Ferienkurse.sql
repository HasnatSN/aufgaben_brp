-- 1) Geben Sie die Gäste sortiert nach CITY, LAST_NAME und FIRST_NAME an!

SELECT c.CITY, v.LAST_NAME, v.LAST_NAME FROM visitors v
INNER JOIN cities c ON c.ZIP_CODE = v.ZIP_CODE
ORDER BY c.ZIP_CODE;

-- 2) Geben Sie die absteigend die Gästeanzahl (Alias „Anzahl“) für jeden ZIP_CODE aus?

SELECT v.ZIP_CODE, COUNT(v.ZIP_CODE) Anzahl FROM visitors v
LEFT JOIN cities c ON v.ZIP_CODE = c.ZIP_CODE
GROUP BY v.ZIP_CODE;

-- 3) Geben Sie absteigend die Gästeanzahl > 0 aufsteigend nach CITY aus!

SELECT c.CITY, COUNT(v.LAST_NAME) Anzahl FROM visitors v
LEFT JOIN cities c ON c.ZIP_CODE = v.ZIP_CODE
GROUP BY c.city
ORDER BY c.city ASC;

-- 4) Welche Sportarten (SPORT) werden vom Trainer "Hauleitner" angeboten? Ausgabe 
-- aufsteigend sortiert nach SPORT und ohne doppelte Einträge!

SELECT gj.SPORT, c.LAST_NAME FROM guided_jt gj
LEFT JOIN coaches c ON gj.coach = c.COACH
WHERE c.LAST_NAME = 'Hauleitner'
GROUP BY gj.sport
ORDER BY gj.sport;

-- 5) Welche Sportarten (SPORT) werden vom Trainer "Hauleitner" angeboten? Ausgabe 
-- aufsteigend sortiert nach SPORT und CATEGORY ohne doppelte Einträge!

SELECT gj.SPORT, c.LAST_NAME, sp.CATEGORY FROM guided_jt gj
LEFT JOIN coaches c ON gj.coach = c.COACH
LEFT JOIN sports sp ON gj.sport = sp.SPORT 
WHERE c.LAST_NAME = 'Hauleitner'
GROUP BY gj.sport
ORDER BY gj.sport;

-- 6) Geben Sie alphabetisch aufsteigend sortiert alle Sportarten der Kategorie "Wasser" 
-- an! 

SELECT gj.SPORT, c.LAST_NAME, sp.CATEGORY FROM guided_jt gj
LEFT JOIN coaches c ON gj.coach = c.COACH
LEFT JOIN sports sp ON gj.sport = sp.SPORT 
WHERE c.LAST_NAME = 'Hauleitner'
GROUP BY gj.sport
ORDER BY gj.sport, sp.CATEGORY;

-- 7) Geben Sie die absteigend sortiert die Sportarten ohne Kurs an! 

SELECT s.sport FROM sports s
LEFT JOIN courses c ON c.SPORT = s.SPORT
WHERE c.COURSE_DATE IS NULL
GROUP BY s.SPORT
ORDER BY s.SPORT DESC;

-- 8) Geben Sie von den gebuchten Sportarten das Kursdatum und den Gast aus! Die Ausgabe erfolgt aufsteigend sortiert nach Datum und Gast.

SELECT bkj.COURSE_DATE, v.LAST_NAME, v.FIRST_NAME FROM bookings_jt bkj
LEFT JOIN visitors v ON v.VISITOR_ID = bkj.VISITOR_ID
WHERE bkj.bookingstate = 'bezahlt'
ORDER BY bkj.COURSE_DATE, v.LAST_NAME;

SELECT bkj.COURSE_DATE, CONCAT(v.LAST_NAME, ' ' , v.FIRST_NAME) AS Teilnehmer FROM bookings_jt bkj
LEFT JOIN visitors v ON v.VISITOR_ID = bkj.VISITOR_ID
WHERE bkj.bookingstate = 'bezahlt'
ORDER BY bkj.COURSE_DATE, v.LAST_NAME;

-- 9) Geben Sie die nicht gebucht Kurse, sortiert nach Datum und Sport aus? 

SELECT bkj.COURSE_DATE, bkj.SPORT FROM bookings_jt bkj
WHERE bkj.BOOKINGSTATE = 'offen'
ORDER BY bkj.COURSE_DATE, bkj.SPORT;

-- 10) Welcher Umsatz (Alias) wurde pro Kategorie erzielt? Nur bezahlte Buchungen sind 
-- gültig und beachten Sie die Member-Anzahl! 

SELECT SUM(sp.Price * bkj.MEMBER) Umsatz FROM bookings_jt bkj
LEFT JOIN courses c ON bkj.COURSE_DATE = c.COURSE_DATE
LEFT JOIN sports sp ON c.SPORT = sp.SPORT
WHERE bkj.BOOKINGSTATE = 'bezahlt'
GROUP BY sp.CATEGORY;