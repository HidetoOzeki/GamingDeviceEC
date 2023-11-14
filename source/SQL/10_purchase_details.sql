CREATE TABLE purchase_details(
purchase_id INTEGER NOT NULL,
purchase_details_id INTEGER NOT NULL ,
product_id INTEGER NOT NULL,
amount INTEGER NOT NULL,
PRIMARY KEY (purchase_id,purchase_details_id),
FOREIGN KEY (purchase_id) REFERENCES purchase(purchase_id),
FOREIGN KEY (product_id) REFERENCES product(product_id)
);

INSERT INTO purchase_details values((select COALESCE((select max(purchase_id) from purchase),1)),購買明細番号,商品番号,数量);