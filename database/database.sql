--
-- DATABASE:`election'
--


--
-- table 1`
--

create table admin(slno int primary key auto_increment,user_name varchar(20),password varchar(30));

insert into admin(user_name,password)values("admin","admin");

--
-- table 2`
--

create table student(sl_no int primary key auto_increment,first_name varchar(30),last_name varchar(30),reg_no int unique not null,ph_no int,gender varchar(10),dob varchar(30),address varchar(50),att_percentage int,pin_code int,state varchar(20),country varchar(20),course varchar(20),user varchar(20),password varchar(30));

--
-- table 3`
--

create table login(slno int primary key auto_increment,user_name varchar(30),password varchar(30),dateandtime datetime DEFAULT CURRENT_TIMESTAMP);


--
-- table 4`
--

create table teacher(slno int primary key auto_increment,user_name varchar(20),password varchar(30));

insert into teacher(user_name,password)values("teacher","teacher");

--
-- table 5`
--

create table candidatechairman(slno int primary key auto_increment,reg_no int,first_name varchar(20),last_name varchar(20),Department varchar(20),post varchar(20),vote int);

--
-- table 6`
--
create table candidatecouncillor(slno int primary key auto_increment,reg_no int,first_name varchar(20),last_name varchar(20),Department varchar(20),post varchar(20),vote int);

--
-- table 7`
--

create table candidatemagazine(slno int primary key auto_increment,reg_no int,first_name varchar(20),last_name varchar(20),Department varchar(20),post varchar(20),vote int);

--
-- table 8`
--

create table candidatevicechairman(slno int primary key auto_increment,reg_no int,first_name varchar(20),last_name varchar(20),Department varchar(20),post varchar(20),vote int);
