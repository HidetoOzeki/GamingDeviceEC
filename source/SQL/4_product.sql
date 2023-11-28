CREATE TABLE product(
product_id INTEGER NOT NULL AUTO_INCREMENT,
category_id CHAR(6) NOT NULL,
bland_id CHAR(6) NOT NULL,
purpose_id CHAR(1) NOT NULL,
product_name VARCHAR(100) NOT NULL,
price INTEGER NOT NULL,
product_delete_flg VARCHAR(5) NOT NULL,
PRIMARY KEY (product_id),
FOREIGN KEY (category_id) REFERENCES category(category_id),
FOREIGN KEY (bland_id) REFERENCES bland(bland_id)
);

INSERT INTO product(category_id, bland_id, purpose_id, product_name, price, product_delete_flg) values("000001","000003","W","test_phone1",100000,"false");
INSERT INTO product(category_id, bland_id, purpose_id, product_name, price, product_delete_flg) values("000002","000001","P","test_mouse1",8000,"false");
INSERT INTO product(category_id, bland_id, purpose_id, product_name, price, product_delete_flg) values("000005","000002","P","test_keyboard1",7500,"false");
