CREATE TABLE words(
	word_id int AUTO_INCREMENT PRIMARY KEY,
	word varchar(100) character set utf8 not null unique,
    translate varchar(100) character set utf8 not null
);
