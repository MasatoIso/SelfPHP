UPDATE book SET price = price * 0.9;
DELETE FROM book WHERE price >= 2500 AND published < '2015-04-01';
SELECT title, price, publish, published FROM book WHERE publish = '翔泳社' ORDER BY price, published DESC;
SELECT uid, unam FROM usr WHERE unam LIKE '山田%';
SELECT publish, AVG(price) FROM book GROUP BY publish;