CREATE TABLE purchase_details(
purchase_id INTEGER NOT NULL,
purchase_details_id INTEGER NOT NULL,
product_id INTEGER NOT NULL,
amount INTEGER NOT NULL,
PRIMARY KEY (purchase_id,purchase_details_id),
FOREIGN KEY (purchase_id) REFERENCES purchase(purchase_id),
FOREIGN KEY (product_id) REFERENCES product(product_id)
);
