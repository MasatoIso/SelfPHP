-- INSERT INTO member (id, nam, sex, old, enter, memo) VALUES (1, '山田太郎', '男', 20, '2020-02-04', NULL);
-- INSERT INTO member (id, nam, sex, old, enter, memo) VALUES (2, '上田次郎', '男', 40, '2020-02-04', "Why dont't you do your best");
-- INSERT INTO member (id, nam, sex, old, enter, memo) VALUES (3, '佐藤和夫', '女', 90, '2020-02-04', 'コンんちは');
-- INSERT INTO member (id, nam, sex, old, enter, memo) VALUES (4, '山田', '女', 5, '2020-02-04', NULL);
-- UPDATE member SET old = 21 WHERE id = 1;
-- DELETE FROM member WHERE id = 1;
-- SELECT nam, old FROM member WHERE old <= 30;
-- SELECT nam, sex, memo FROM member WHERE sex = '男' AND memo IS NOT NULL;
-- SELECT nam, sex, memo FROM member WHERE sex = '男' OR memo IS NOT NULL;
-- -- ASC, DESC を省略するとASCになる　複数のソートをすることもできる
-- SELECT * FROM member ORDER BY old, id DESC;
-- SELECT sex, AVG(old) FROM member GROUP BY SEX;
-- SELECT sex, AVG(old)  AS old_avg FROM member GROUP BY SEX;

-- CREATE TABLE products (pid INT PRIMARY KEY AUTO_INCREMENT, pname VARCHAR(255) NOT NULL, price INT, category VARCHAR(255) DEFAULT '文房具');
INSERT INTO products (pid, pname, price, category) VALUES(1, 'メロン', 500, '食物');
INSERT INTO products (pid, pname, price, category) VALUES(2, 'マンゴー', 10000, '食物');
INSERT INTO products (pid, pname, price) VALUES(3, 'シャープペンシル', 2232500);
INSERT INTO products (pid, pname, price) VALUES(4, '消しゴム', 50);
SELECT pname AS '商品名', price AS '価格' FROM products WHERE category = '食物' AND price >= 200;