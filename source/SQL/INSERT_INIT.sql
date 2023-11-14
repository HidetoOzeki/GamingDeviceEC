//商品ブランド追加
INSERT INTO bland values("000001","Razer");
INSERT INTO bland values("000002","Logicool");
INSERT INTO bland values("000003","SteelSeries");
INSERT INTO bland values("000004","Benq");
INSERT INTO bland values("000005","Corsair");
INSERT INTO bland values("000006","asus");
//カテゴリ追加
INSERT INTO category values("000001","モバイル");
INSERT INTO category values("000002","マウス");
INSERT INTO category values("000003","モニター");
INSERT INTO category values("000004","オーディオ");
INSERT INTO category values("000005","キーボード");
//商品ブランド
INSERT INTO product(category_id, bland_id, purpose_id, product_name, price, product_delete_flg) values("000002","000001","P","Razer Death Adder Chroma",5000,"false");
INSERT INTO product(category_id, bland_id, purpose_id, product_name, price, product_delete_flg) values("000003","000004","W","Benq ",5000,"false");
INSERT INTO product(category_id, bland_id, purpose_id, product_name, price, product_delete_flg) values("000005","000005","P","Corsair Keyboard",9000,"false");
INSERT INTO product(category_id, bland_id, purpose_id, product_name, price, product_delete_flg) values("000004","000001","P","Razer Kraken",8000,"false");

