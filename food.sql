CREATE TABLE distributer (
     id int NOT NULL unique,
     name varchar(255) not null ,
     PRIMARY KEY (id)
);

CREATE TABLE food (
  food_id int not null unique ,
  exp_date datetime not null,
  PRIMARY KEY (food_id)
);

CREATE TABLE dropofflocation (
  drop_id int not null unique,
  address varchar(255) ,
  food_id int REFERENCES food,
  id int REFERENCES distributer,
  PRIMARY KEY (drop_id)
);

CREATE TABLE foodBank(
 organization varchar(255) not null,
 drop_id int REFERENCES dropofflocation
);

CREATE TABLE school(
 district varchar(255) not null,
 drop_id int REFERENCES dropofflocation
);

