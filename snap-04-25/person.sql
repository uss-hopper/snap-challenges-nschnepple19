drop table if exists person;

create table person(
   personId BINARY(16) not null,
   personEmail VARCHAR(32) not null,
   unique(personEmail),
   primary key(personId)
);