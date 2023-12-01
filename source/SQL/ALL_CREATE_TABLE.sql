CREATE TABLE bland(
bland_id CHAR(6) NOT NULL,
bland_name VARCHAR(100) NOT NULL,
PRIMARY KEY (bland_id)
);
CREATE TABLE category(
category_id CHAR(6) NOT NULL,
category_name VARCHAR(100) NOT NULL,
PRIMARY KEY (category_id)
);
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
CREATE TABLE product_spec(
specification_id CHAR(5) NOT NULL,
product_id INTEGER NOT NULL,
interface VARCHAR(50) NOT NULL,
screen_clearly VARCHAR(50) NOT NULL,
product_os VARCHAR(50) NOT NULL,
product_size VARCHAR(30) NOT NULL,
product_weight VARCHAR(30) NOT NULL,
product_color VARCHAR(30) NOT NULL,
PRIMARY KEY (specification_id),
FOREIGN KEY (product_id) REFERENCES product(product_id)
);
CREATE TABLE performance(
performance_id CHAR(6) NOT NULL,
product_id INTEGER NOT NULL,
cpu INTEGER,
memory INTEGER,
storage INTEGER,
battery INTEGER,
size INTEGER,
weight INTEGER,
screen_clearly INTEGER,
PRIMARY KEY (performance_id),
FOREIGN KEY (product_id) REFERENCES product(product_id)
);
CREATE TABLE cart(
user_id INTEGER NOT NULL,
product_id INTEGER NOT NULL,
cart_date DATE NOT NULL,
PRIMARY KEY (user_id,product_id),
FOREIGN KEY (user_id) REFERENCES user(user_id),
FOREIGN KEY (product_id) REFERENCES product(product_id)
);
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
CREATE TABLE purchase(
purchase_id INTEGER NOT NULL AUTO_INCREMENT,
user_id INTEGER NOT NULL,
purchase_date DATE NOT NULL,
PRIMARY KEY (purchase_id),
FOREIGN KEY (user_id) REFERENCES user(user_id)
);
CREATE TABLE purchase_details(
purchase_id INTEGER NOT NULL,
purchase_details_id INTEGER NOT NULL,
product_id INTEGER NOT NULL,
amount INTEGER NOT NULL,
PRIMARY KEY (purchase_id,purchase_details_id),
FOREIGN KEY (purchase_id) REFERENCES purchase(purchase_id),
FOREIGN KEY (product_id) REFERENCES product(product_id)
);