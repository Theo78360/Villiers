drop database if exists mairie;
create database mairie;
use mairie;

create table association(
	idA int(3) not null,
	nomA varchar(50),
	SiegeA varchar(100),
	DateCreationA date,
	primary key (idA)
);

create table ecole (	
	idE int(3) not null,
	nomE varchar(75),
	adresseE varchar(100),
	primary key(idE)
);


create table evenement(
	idEv int(3) not null,
	NomEv varchar(100),
	DateEv Date,
	LieuEv varchar(100),
	primary key(idEv)
	);

create table habitant(
	idpersonne int(3) not null,
	nomH varchar(50),
	prenomH varchar(50),
	DateNaissA varchar(50),
	SexeH enum ("Homme","Femme"),
	ProfessionH varchar(75),
	primary key (idpersonne)
);


create table tranche_age(
	idT int(3) not null,
	nomT varchar(50),
	primary key (idT)
);

create table enfant(
	idEf int(3) not null,
	nomEf varchar(50),
	prenomEf varchar(50),
	DateEf date,
	SexeEf enum ("Homme","Femme"),
	idE int(3),
	idT int(3),
	idpersonne int(3),
	primary key (idEf),
	foreign key (idT) references tranche_age(idT),
	foreign key (idE) references ecole(idE),
	foreign key (idpersonne) references habitant(idpersonne)
);



create table mariage(
	idpersonne1 int(3),
	idpersonne2 int(3),
	Datehm date,
	DateD Date,
	primary key (Datehm,idpersonne2,idpersonne1)
);

create table acces(
	idEv int(3),
	idT int(3),
	primary key (idEv,idT),
	foreign key (idEv) references evenement(idEv),
	foreign key (idT) references tranche_age(idT)
);

create table collabore(
	idA int(3),
	idEv int(3),
	primary key (idEv,idA),
	foreign key (idEv) references evenement(idEv),
	foreign key (idA) references association(idA)
);

create table contribue(
	idpersonne int(3),
	idEv int(3),
	primary key (idEv,idpersonne),
	foreign key (idEv) references evenement(idEv),
	foreign key (idpersonne) references habitant(idpersonne)
);

create table participe(
	idpersonne int(3),
	idA int(3),
	primary key (idA,idpersonne),
	foreign key (idA) references association(idA),
	foreign key (idpersonne) references habitant(idpersonne)
);

create table admin(
	idad int(3) auto_increment,
	pseudo varchar(50),
	mdp varchar(50),
	primary key(idad)
);

insert into ecole values (1,"Jean Moulin","63 rue Henri Richaume"),(2,"Paul Eluard","3 boulevard de la République");
insert into tranche_age values (1,"Jeune"),(2,"Enfant");
insert into habitant values (1,"blabla","theo","2020-04-04","Homme","Caissier");
insert into evenement values (1,"Kermesse","2020-04-30","Mairie"),
	(2,"Concert","2020-05-08","CentreVille"),(3,"Art","2020-05-23","Fetes");
insert into association values (1,"MJC","Mairie","2005-02-21"),(2,"Chasse","Mairie","2004-03-04"),(3,"Secours","Mairie","2002-12-12");

insert into admin values(null,"a@gmail.com","1234");


drop trigger if   exists suppmariage; 

delimiter // 

create trigger suppmariage 

    after update on mariage 

    for each row 
    
    begin
    
    if validation ="oui" then
    
    delete mariage where validation=idpersonne1;

      

    end; 

    // 

    Delimiter ; 
    
    
    
drop trigger if   exists suppevenement; 

delimiter // 

create trigger suppevenement 

    after update on evenement

    for each row 
    
    begin
    
    if curdate()>=date_f then
    
    delete evenement where date_f=idEv;

      

    end; 

    // 

    Delimiter ; 
    
    

    

