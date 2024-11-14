create table if not exists filmes (
    id int primary key auto_increment,
    titulo varchar(100) not null,
    ano int not null,
    genero varchar(255),
    url text
);

CREATE USER 'ernandes'@'%' IDENTIFIED BY '123456';
CREATE USER 'ernandes'@'%.%.%.%' IDENTIFIED BY '123456';
CREATE USER 'ernandes'@'localhost' IDENTIFIED BY '123456';

GRANT ALL PRIVILEGES ON *.* TO 'ernandes'@'%';
GRANT ALL PRIVILEGES ON *.* TO 'ernandes'@'%.%.%.%';
GRANT ALL PRIVILEGES ON *.* TO 'ernandes'@'localhost';