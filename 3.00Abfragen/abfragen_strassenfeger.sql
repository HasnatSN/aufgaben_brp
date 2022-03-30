-- 1) Geben Sie von den Filmen das Erscheinungsjahr absteigender und Titel sortiert aus!

SELECT f.YEAR_OF_PUBLICATION, f.TITLE FROM film f
ORDER BY f.YEAR_OF_PUBLICATION DESC, f.TITLE;

-- 2) Listen Sie sortiert alle Kunden mit Ort auf! 

SELECT c.LAST_NAME, ci.CITY FROM customers c
INNER JOIN cities ci ON c.ZIP_CODE = ci.ZIP_CODE;

-- 3) Geben Sie alle Kunden, deren Zuname mit „V“ beginnen, aus!

SELECT c.LAST_NAME FROM customers c
WHERE c.LAST_NAME LIKE 'V%';

-- 4) Welche männlichen Kunden sind keine Stammkunden? Sortiert Ausgabe. 

SELECT * FROM customers c
INNER JOIN e_sexes ex ON c.SEX = ex.SEX
WHERE c.SEX = 'männlich' and c.REGULAR_CUSTOMER = 'Nein';

-- 5) Welche weiblichen Kunden aus Wien und keine Stammkunden gibt es? Sortiere die Ausgabe nach Zu- und Vornamen! 

SELECT c.LAST_NAME, c.FIRST_NAME FROM customers c
INNER JOIN e_sexes ex ON c.SEX = ex.SEX
INNER JOIN cities ci ON c.ZIP_CODE = ci.ZIP_CODE
WHERE c.SEX = 'weiblich' and ci.CITY = 'Wien' and c.REGULAR_CUSTOMER = 'nein';

-- 6) Geben Sie absteigend sortiert den Preis und Filmtitel aus! 

SELECT c.PRICE, f.TITLE FROM film f
INNER JOIN categories c ON f.CATEGORY = c.CATEGORY
ORDER BY c.PRICE DESC;

-- 7) Listen Sie die ausgeliehenen Filmetitel nach Kunden auf? 

SELECT f.TITLE, c.LAST_NAME FROM customers c
INNER JOIN rental r ON c.CUSTOMER_ID = r.CUSTOMER_ID
INNER JOIN film f ON r.FILM_ID = r.FILM_ID
WHERE r.ENDDATE IS NULL;

-- 8) Welche Kunden haben sich noch nie einen Film ausgeliehen? 

SELECT c.CUSTOMER_ID, c.LAST_NAME, c.FIRST_NAME FROM customers c
LEFT JOIN rental r ON c.CUSTOMER_ID = r.CUSTOMER_ID
WHERE r.RENTAL_ID IS NULL;

-- 9) Wie viele Kunden haben die gleiche Postleitzahl? Die Ausgabe soll sortiert nach der Postleitzahl erfolgen!

SELECT c.ZIP_CODE, COUNT(c.ZIP_CODE) 'Anzahl der Kunden von dieser PLZ' FROM customers c
GROUP BY c.ZIP_CODE
ORDER BY c.ZIP_CODE;

-- 10) Wie lange haben sich die einzelnen Kunden die Filmtitel ausgeliehen? Berücksichtigen Sie nur die zurückgebrachten Filme! Verwenden Sie Alias und die Funktion DATEDIFF() zur Ermittlung der Leihdauer.

SELECT c.LAST_NAME, DATEDIFF(r.ENDDATE, r.STARTDATE) 'ausgehliehen in Tagen' FROM customers c
INNER JOIN rental r ON c.CUSTOMER_ID = r.CUSTOMER_ID
WHERE r.ENDDATE IS NOT NULL;