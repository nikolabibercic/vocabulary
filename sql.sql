CREATE TABLE words(
	word_id int AUTO_INCREMENT PRIMARY KEY,
	article varchar(30) character set utf8, 
	word varchar(250) character set utf8 not null unique,
    translate varchar(250) character set utf8 not null
);

CREATE TABLE users(
	user_id int AUTO_INCREMENT PRIMARY KEY,
	username varchar(250) character set utf8 not null unique, 
	password varchar(250) character set utf8 not null unique
);

insert into users(username,password) values ('piksi','piksi');

ALTER TABLE words CONVERT TO CHARACTER SET utf8 COLLATE utf8_spanish_ci;
