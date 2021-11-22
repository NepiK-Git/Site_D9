Drop database if exists BDD_D9;
Create database BDD_D9;
Use BDD_D9;

Drop table if exists users;
Create table if not exists users (
	id_u int(11) not null auto_increment,
	pseudo varchar(30) UNIQUE,
	firstName varchar(50),
	lastName varchar(50),
	email varchar(255) UNIQUE,
    datenaiss varchar(10),
    telephone varchar(10),
	mdp varchar(255),
    age int (3),
	lvl int not null default 1,
	primary key(id_u)
) ENGINE=InnoDB;

Insert into users values
(1, "Nepik", "Lucas", "LABASTUGUE", "lucas@gmail.com", "1997-03-29","0781008570", "d0b853cc7619c24c92a81d87681eaf24386a39dc",24, 1),
(2, "Xeito", "Antoine", "NOMDEFAMILLE", "antoine@gmail.com", "1999-07-24","0685312201" ,"d0b853cc7619c24c92a81d87681eaf24386a39dc",22, 1),
(3, "Vilan", "xxx", "xxx", "xxx@gmail.com", "****-**-**","**********" ,"d0b853cc7619c24c92a81d87681eaf24386a39dc","**", 0);
