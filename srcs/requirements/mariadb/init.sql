-- -- データベースの作成
CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE};

-- -- ユーザーの作成
CREATE USER '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}';
CREATE USER '${MYSQL_ADMIN_NAME}'@'%' IDENTIFIED BY '${MYSQL_ADMIN_PASSWORD}';

-- ユーザーへの権限付与
GRANT ALL PRIVILEGES ON ${MYSQL_DATABASE}.* TO '${MYSQL_USER}'@'%';
GRANT ALL PRIVILEGES ON *.* TO '${MYSQL_ADMIN_NAME}'@'%';

-- 権限のフラッシュ
FLUSH PRIVILEGES;

-- -- データベースの使用
-- USE ${MYSQL_DATABASE};

-- -- テーブルの作成
-- CREATE TABLE IF NOT EXISTS admin (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     username VARCHAR(255) NOT NULL,
--     password VARCHAR(255) NOT NULL
-- );

-- -- -- admin ユーザーの追加
-- INSERT INTO admin (username, password) VALUES ('${MYSQL_ADMIN_NAME}', '${MYSQL_ADMIN_PASSWORD}');