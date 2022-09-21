# Install <br>
Docker image setup<br>
```
docker build -f Dockerfile -t phpdb .. 
```
<br>
Containers run
```
docker-compose up
```
<br>
Go into container bash 
```
winpty docker exec -it php-database-db-1 bash 
```
<br>
Setup database
```
mysql -p <br>
```
```
use test; <br>
```
```
create table tabela1 (id int AUTO_INCREMENT not null primary key,imie TEXT,nazwisko TEXT);<br>
```

192.168.0.127:8085/login.php
