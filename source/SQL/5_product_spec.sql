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

INSERT INTO product_spec values("000001",1,"インターフェース","解像度","OS","サイズ","重さ","色");