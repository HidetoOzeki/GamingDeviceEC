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

INSERT INTO review values(1,2,CURRENT_DATE(),2.5,"レビューの内容：********************"),(2,2,CURRENT_DATE(),0.5,"レビューの内容：********************"),(3,2,CURRENT_DATE(),1,"レビューの内容：********************");