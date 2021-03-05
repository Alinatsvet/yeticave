CREATE TABLE cateories(
categ_id int AUTO_INCREMENT,
Categ_name varchar(50),
Categ_nick varchar(13)
CONSTRAINT categ_primary PRIMARY KEY (categ_id,categ_name,categ_nick)
);
CREATE UNIQUE INDEX categ_name on categories (categ_name);


CREATE TABLE Lots(
lot_id int PRIMARY KEY AUTO_INCREMENT,
lot_categ_id int,
lot_user_id int,
lot_winner_id int,
lot_name varchar(70),
lot_discr text,
lot_cr-date DATETIME,
lot_img tex,
lot_first-price int,
lot_comp_date DATETIME,
lot_step int
);
CREATE INDEX categ_index on Lost(lot_categ_id);
CREATE INDEX user_index on Lost(lot_user_id);
CREATE INDEX winner_index on Lost(lot_ winner_id);


CREATE TABLE rate(
rate_id int PRIMARY KEY AUTO_INCREMENT,
lot_id int,
user_id int,
rate-date DATETIME,
rate-price int,
);
CREATE UNIQUE INDEX rate_lot_index on rate(lot_id);
CREATE UNIQUE INDEX rate_user_index on rate(user_id);


CREATE TABLE user(
user_id int AUTO_INCREMENT,
user_name varchar(100),
user_emaill_ varchar(100),
user_password varchar(50),
user_signup_date date,
user_image text,
user_contact varchar(18),
CONSTRAINT user_primary PRIMARY KEY (user_id, usser_name, user_email)
);
CREATE UNIQUE INDEX user_name on users(user_name);
CREATE UNIQUE INDEX user_email on users(user_email);

ALTER TABLE 'lost'
ADD CONSTRAIN lost_fk1 FOREIGN KEY (lot_user_id) REFERENCES users (user_id);
ALTER TABLE 'lost'
ADD CONSTRAIN lost_fk2 FOREIGN KEY (lot_categ_id) REFERENCES categories (categ_id);
ALTER TABLE 'lost'
ADD CONSTRAIN lost_fk3 FOREIGN KEY (lot_winner_id) REFERENCES user (user_id);




