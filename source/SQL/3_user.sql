CREATE TABLE user(
user_id INTEGER NOT NULL AUTO_INCREMENT,
role_id CHAR(1) NOT NULL,
user_name VARCHAR(100) NOT NULL,
mail_address VARCHAR(100) NOT NULL,
user_password VARCHAR(100) NOT NULL,
user_address VARCHAR(100),
user_delete_flg VARCHAR(5) NOT NULL,
PRIMARY KEY (user_id)
);

INSERT INTO user(role_id,user_name,mail_address,user_password,user_delete_flg) values("M","名前","メールアドレス","パスワード","false");