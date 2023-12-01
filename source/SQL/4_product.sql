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
INSERT INTO product(category_id, bland_id, purpose_id, product_name, price, product_delete_flg) values("000003","000001","P","Razer Death Adder Chroma",5000,"false"),
("000003","000004","W","Benq ",5000,"false"),
("000003","000005","P","Corsair Keyboard",9000,"false"),
("000003","000001","P","Razer Kraken",8000,"false"),
("000001","000003","W","test_phone",80000,"false"),
("000002","000001","P","test_mouse",8000,"false"),
("000005","000002","P","test_keyboard",7500,"false"),
("000001","000004","P","test_phone1",100000,"false"),
("000002","000005","W","test_mouse1",10000,"false"),
("000005","000006","W","test_keyboard1",9000,"false");
