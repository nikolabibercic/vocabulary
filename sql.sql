CREATE TABLE words(
	word_id int AUTO_INCREMENT PRIMARY KEY,
	article varchar(30) character set utf8, 
	word varchar(250) character set utf8 not null unique,
    translate varchar(250) character set utf8 not null
);
