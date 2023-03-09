CREATE DATABASE user;
Use user;
CREATE TABLE user_info(
    id int PRIMARY KEY auto_increment NOT NULL,
    first_name varchar(50) NOT NULL,
    last_name varchar(50) NOT NULL,
    addr varchar(50) NOT NULL,
    gender varchar(10) NOT NULL 
    );

INSERT INTO user_info(first_name,last_name,addr,gender) 
VALUES("Herbez","Shema","Kicukiro","Male"); 