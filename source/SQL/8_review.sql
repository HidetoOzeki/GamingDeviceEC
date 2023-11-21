CREATE TABLE review(
user_id INTEGER NOT NULL,
product_id INTEGER NOT NULL,
post_date DATE NOT NULL,
review_rate DOUBLE NOT NULL,
review_contents VARCHAR(400) NOT NULL,
PRIMARY KEY (user_id,product_id),
FOREIGN KEY (user_id) REFERENCES user(user_id),
FOREIGN KEY (product_id) REFERENCES product(product_id)
);

INSERT INTO review values(ユーザーID,商品ID,CURRENT_DATE(),評価値,"レビューの内容：********************");