CREATE TABLE performance(
performance_id CHAR(6) NOT NULL,
product_id INTEGER NOT NULL,
cpu INTEGER,
memory INTEGER,
storage INTEGER,
battery INTEGER,
size INTEGER,
screen_clearly INTEGER,
weight INTEGER,
PRIMARY KEY (performance_id),
FOREIGN KEY (product_id) REFERENCES product(product_id)
);

INSERT INTO performance() values("パフォーマンスID",商品ID,CPU,メモリ,ストレージ容量,バッテリー容量,画面サイズ,解像度,重さ);