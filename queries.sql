INSERT INTO categories SET  categ_id = "0", Categ_name = "Доски и лыжи", Categ_nick = "54";
INSERT INTO categories SET  categ_id = "1", Categ_name = "Крепления", Categ_nick = "45";
INSERT INTO categories SET  categ_id = "2", Categ_name = "Ботинки", Categ_nick = "98";
INSERT INTO categories SET  categ_id = "3", Categ_name = "Одежда", Categ_nick = "89";
INSERT INTO categories SET  categ_id = "4", Categ_name = "Инструменты", Categ_nick = "96";
INSERT INTO categories SET  categ_id = "5", Categ_name = "Разное", Categ_nick = "69";


INSERT INTO users SET  user_id = "0", user_name = "катя", user_email = "kat@gmail.com", user_password = "123456789", user_signup_date = "01.01.2000", user_contact = "89999999999";
INSERT INTO users SET  user_id = "1", user_name = "алина", user_email = "al@gmail.com", user_password = "123456789", user_signup_date = "01.01.2000", user_contact = "89999999999";



INSERT INTO rate SET rate_id ="0", lot_id = "0", user_id = "", rate_date = "2000.01.01 00:00:00", rate_price = "500";
INSERT INTO rate SET rate_id ="1", lot_id = "1", user_id = "", rate_date = "2000.01.01 00:00:00", rate_price = "600";


INSERT INTO lots SET lot_id = "", lot_user_id = "", lot_winner_id = "", lot_name = "Сноуборд", lot_categ_id = "", lot_discr = "", lot_img = "C:\Users\user\Desktop", lot_cr_date = "2000.01.01 00:00:00", lot_comp_date = "2000.01.02 00:00:00", price = "500", lot_step = "900";
INSERT INTO lots SET lot_id = "", lot_user_id = "", lot_winner_id = "", lot_name = "Лыжи", lot_categ_id = "", lot_discr = "", lot_img = "C:\Users\user\Desktop", lot_cr_date = "2000.01.01 00:00:00", lot_comp_date = "2000.01.02 00:00:00", price = "600", lot_step = "1000";

SELECT categ_name FROM `categories`;
SELECT * FROM `lots` WHERE lot_comp_date is NULL;
SELECT lot_id, lot_categ_id, lot_user_id, lot_winner_id, lot_name, lot_discr, lot_cr_date, lot_img, price, lot_comp_date, lot_step, categ_name FROM `lots`, `categories` WHERE lot_id = '4' AND categ_id = '2';
UPDATE `lots` SET lot_name = '2014 Rossignol District Snowboard Black Edition' WHERE lot_id = 2;
SELECT * FROM `rate` WHERE rate_id = '2' AND DATEDIFF(CURDATE(), rate_date) = 0;


