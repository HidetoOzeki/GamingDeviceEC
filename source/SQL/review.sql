CREATE TABLE review(
user_id INTEGER NOT NULL,
product_id INTEGER NOT NULL,
post_date DATE NOT NULL,
review_rate INTEGER NOT NULL,
review_contents VARCHAR(400) NOT NULL,
PRIMARY KEY (user_id,product_id),
FOREIGN KEY (user_id) REFERENCES user(user_id),
FOREIGN KEY (product_id) REFERENCES product(product_id)
);