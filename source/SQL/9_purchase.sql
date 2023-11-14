CREATE TABLE purchase(
purchase_id INTEGER NOT NULL AUTO_INCREMENT,
user_id INTEGER NOT NULL,
purchase_date DATE NOT NULL,
PRIMARY KEY (purchase_id),
FOREIGN KEY (user_id) REFERENCES user(user_id)
);

INSERT INTO purchase values(購買番号,ユーザーID,CURRENT_DATE());