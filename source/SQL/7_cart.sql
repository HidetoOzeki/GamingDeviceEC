CREATE TABLE cart(
user_id INTEGER NOT NULL,
product_id INTEGER NOT NULL,
cart_date DATE NOT NULL,
PRIMARY KEY (user_id,product_id),
FOREIGN KEY (user_id) REFERENCES user(user_id),
FOREIGN KEY (product_id) REFERENCES product(product_id)
);
ALTER TABLE cart ADD COLUMN amounts INTEGER DEFAULT 1;
INSERT INTO cart values(ユーザーID,商品ID,CURRENT_DATE());