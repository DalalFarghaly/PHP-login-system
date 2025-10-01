create database signup;
use signup;
create table user(
id int auto_increment primary key,
firstName varchar(50),
lastName varchar(50),
email varchar(100),
pass varchar(40)
)