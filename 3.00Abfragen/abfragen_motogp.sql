-- 1. Welche Fahrer haben keine Startnummer? (Lösung: TSUDA Takuya) 

SELECT CONCAT(d.LAST_NAME, ' ', d.FIRST_NAME) Fahrer FROM drivers d
WHERE d.RACE_NUMBER IS NULL;

-- 2. Geben Sie alphabetischer sortiert die vollständigen Fahrer der Saison 2017 aus!

SELECT CONCAT(d.LAST_NAME, ' ' , d.FIRST_NAME) Fahrer, e.EVENT_DATE FROM drivers d
LEFT JOIN results_jt rjt ON d.DRIVER_ID = rjt.DRIVER_ID
LEFT JOIN events e ON rjt.CIRCUIT_ID = e.CIRCUIT_ID
WHERE YEAR(e.EVENT_DATE) = '2017'
GROUP BY Fahrer;

-- 3. Welche Motorräder werden von dem Fahrer gefahren?

SELECT * FROM `driver_has_models_jt`
GROUP BY MODEL;

-- 4. Welche Motorräder fahren Fahrer aus „Italien“? Geben Sie nur die Hersteller alphabetisch sortiert aus!

SELECT m.MANUFACTURER FROM models m
LEFT JOIN driver_has_models_jt dmjt ON m.MODEL = dmjt.MODEL
LEFT JOIN drivers d ON dmjt.DRIVER_ID = d.DRIVER_ID
WHERE d.COUNTRY_CODE = 'Ita'
GROUP BY m.MANUFACTURER
ORDER BY m.MANUFACTURER;

-- 5. Welche Fahrer fahren ein Motorrad von Honda? Ausgabe sortiert nach Zu- und Vornamen!

SELECT CONCAT(d.FIRST_NAME,' ',d.LAST_NAME) Fahrer FROM driver_has_models_jt dmjt
LEFT JOIN models m ON dmjt.MODEL = m.MODEL
LEFT JOIN drivers d ON dmjt.DRIVER_ID = d.DRIVER_ID
WHERE m.manufacturer = 'Honda';

-- 6. Geben Sie sortiert von allen Teams die Fahrer aus!

SELECT CONCAT(d.FIRST_NAME,' ',d.LAST_NAME) 'Fahrer von allen Teams' FROM teams t
LEFT JOIN drivers d ON t.TEAM_ID = d.TEAM_ID;

-- 7. Auf welchen Strecken fanden in der Saison 2017 Veranstaltungen statt? Geben Sie  das Ergebnis sortiert nach dem Datum aus!

SELECT c.CIRCUIT FROM circuits c
LEFT JOIN events e ON c.CIRCUIT_ID = e.CIRCUIT_ID
WHERE e.EVENT_DATE IS NOT NULL
GROUP BY c.CIRCUIT;

-- 8. Auf welchen Rennstrecken fanden 2017-04 Veranstaltungen statt? Sortieren Sie die Ausgabe nach dem Datum.

SELECT c.CIRCUIT, e.EVENT_DATE FROM circuits c
LEFT JOIN events e ON c.CIRCUIT_ID = e.CIRCUIT_ID
WHERE YEAR(e.EVENT_DATE) = '2017' AND MONTH(e.EVENT_DATE) = '04'
GROUP BY c.CIRCUIT
ORDER BY e.EVENT_DATE;

-- 9. Wie viele Veranstaltungen (Alias „Anzahl“) fanden 2017-04 statt?

SELECT COUNT(e.EVENT_DATE) Anzahl FROM circuits c
LEFT JOIN events e ON c.CIRCUIT_ID = e.CIRCUIT_ID
WHERE YEAR(e.EVENT_DATE) = '2017' AND MONTH(e.EVENT_DATE) = '04';

-- 10. Wie lautete das Ergebnis für die 4. Veranstaltung im Jahr 2017? Geben Sie die Position, Punkte und Zunamen gereiht nach der Position aus!

SELECT rjt.Position, rjt.SCORE, d.last_name Zuname FROM events e
LEFT JOIN results_jt rjt ON e.CIRCUIT_ID = rjt.CIRCUIT_ID
LEFT JOIN drivers d ON rjt.driver_ID = d.driver_ID
WHERE YEAR(e.EVENT_DATE) = '2017' and e.EVENT_NUMBER = '4'
ORDER BY rjt.position;

-- 11. Welche Fahrer erreichten bei der 1. Veranstaltung der Saison 2017 keine Punkte? Anzeige sortiert nach dem Zunamen! (Lösung: 3 Fahrer)

SELECT d.last_name Zuname FROM events e
LEFT JOIN results_jt rjt ON e.CIRCUIT_ID = rjt.CIRCUIT_ID
LEFT JOIN drivers d ON rjt.driver_ID = d.driver_ID
WHERE YEAR(e.EVENT_DATE) = '2017' and e.EVENT_NUMBER = '1' and rjt.score is NULL;

-- 12. Welche Fahrer scheinen 2017 nie in der Ergebnisliste auf? (Lösung: 4 Fahrer)

SELECT * FROM drivers d 
LEFT JOIN results_jt r ON d.DRIVER_ID = r.DRIVER_ID
LEFT JOIN events e ON r.CIRCUIT_ID = e.CIRCUIT_ID
WHERE r.POSITION IS NULL;

-- 13. Wie viele Punkte konnte der Fahrer Rossi 2017 in den ersten beiden Veranstaltungen sammeln? (Lösung: 36 Punkte)

SELECT d.LAST_NAME Zuname, SUM(rjt.SCORE) Gesamtpunktzahl FROM drivers d
LEFT JOIN results_jt rjt ON d.DRIVER_ID = rjt.DRIVER_ID
LEFT JOIN events e ON rjt.CIRCUIT_ID = e.CIRCUIT_ID
WHERE d.LAST_NAME = 'Rossi' and YEAR(e.EVENT_DATE) = '2017' and e.EVENT_NUMBER <= '2' 
GROUP BY d.LAST_NAME;

-- 14. Welchen Punktestand hatten die Fahrer Rossi und Marquez im Jahr 2017? Sortieren Sie das Ergebnis nach Punkte und Name. (Lösung: 174 Marquez, 114 Rossi)

SELECT d.LAST_NAME Zuname, SUM(rjt.SCORE) Gesamtpunktzahl FROM drivers d
LEFT JOIN results_jt rjt ON d.DRIVER_ID = rjt.DRIVER_ID
LEFT JOIN events e ON rjt.CIRCUIT_ID = e.CIRCUIT_ID
WHERE d.LAST_NAME = 'Rossi' OR d.LAST_NAME = 'Marquez' and YEAR(e.EVENT_DATE) = '2017'
GROUP BY d.LAST_NAME
ORDER BY rjt.SCORE, Zuname;

-- 15. Wie viele Punkte konnte das Team "Red Bull KTM Factory Racing" in der Saison 2017 erreichen? (Lösung: 26 Punkte)

SELECT t.TEAM, SUM(rjt.SCORE) Gesamtpunktzahl FROM drivers d
LEFT JOIN results_jt rjt ON d.DRIVER_ID = rjt.DRIVER_ID
LEFT JOIN events e ON rjt.CIRCUIT_ID = e.CIRCUIT_ID
LEFT JOIN teams t ON d.TEAM_ID = t.TEAM_ID
WHERE t.TEAM = 'Red Bull KTM Factory Racing' and YEAR(e.EVENT_DATE) = '2017';

-- 16. Wie hoch war 2017 die Durchschnittsgeschwindigkeit der Sieger über die ersten 5  Veranstaltungen? (Lösung: 163,04 km/h)

SELECT AVG(rjt.AVERAGE) 'Avg Velocity' FROM results_jt rjt
LEFT JOIN events e ON rjt.CIRCUIT_ID = e.CIRCUIT_ID
WHERE YEAR(e.EVENT_DATE) = '2017' and e.EVENT_NUMBER <= '5' and rjt.POSITION = '1';

-- 17. Wie hoch war 2017 die Durchschnittsgeschwindigkeit des Fahrers Rossi über die ersten 5 Veranstaltungen? (Lösung: 162,725 km/h)

SELECT d.LAST_NAME, AVG(rjt.AVERAGE) 'Avg Velocity' FROM results_jt rjt
LEFT JOIN events e ON rjt.CIRCUIT_ID = e.CIRCUIT_ID
LEFT JOIN drivers d ON rjt.DRIVER_ID = d.DRIVER_ID
WHERE YEAR(e.EVENT_DATE) = '2017' and e.EVENT_NUMBER <= '5' and d.LAST_NAME = 'Rossi';

-- 18. Wie viele Punkte (Alias „ges_Punkte“) konnten jedes Teams in der Saison 2017 erreichen? Ausgabe absteigend gereiht nach den Punkten

SELECT t.TEAM, SUM(rjt.SCORE) Ges_Punkte FROM results_jt rjt
LEFT JOIN drivers d ON rjt.DRIVER_ID = d.DRIVER_ID
LEFT JOIN events e ON rjt.CIRCUIT_ID = e.CIRCUIT_ID
LEFT JOIN teams t ON d.TEAM_ID = t.TEAM_ID
WHERE YEAR(e.EVENT_DATE) = '2017'
GROUP BY t.TEAM;