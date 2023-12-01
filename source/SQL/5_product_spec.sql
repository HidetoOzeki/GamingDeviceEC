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

INSERT INTO product_spec values("00001",1,"インターフェース","解像度","OS","サイズ","重さ","色"),
("00002",2,"インターフェース","解像度","OS","サイズ","重さ","色"),
("00003",3,"インターフェース","解像度","OS","サイズ","重さ","色"),
("00004",4,"インターフェース","解像度","OS","サイズ","重さ","色"),
("00005",5,"インターフェース","解像度","OS","サイズ","重さ","色"),
("00006",6,"インターフェース","解像度","OS","サイズ","重さ","色"),
("00007",7,"インターフェース","解像度","OS","サイズ","重さ","色"),
("00008",8,"インターフェース","解像度","OS","サイズ","重さ","色"),
("00009",9,"インターフェース","解像度","OS","サイズ","重さ","色"),
("00010",10,"インターフェース","解像度","OS","サイズ","重さ","色");