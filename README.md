docker build -f Dockerfile -t phpdb ..
docker-compose up
winpty docker exec -it php-database-db-1 bash
mysql -p
use test;
create table tabela1 (id int AUTO_INCREMENT not null primary key,imie TEXT,nazwisko TEXT);

192.168.0.127:8085/login.php