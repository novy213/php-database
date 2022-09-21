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
mysql -p
use test; 
create table tabela1 (id int AUTO_INCREMENT not null primary key,imie TEXT,nazwisko TEXT);
```

<br>

Now go to db.php.example, remove .example extension and setup server info. <br>

Recommended:
```
$servername = "php-database-db-1";
$username = "root";
$password = "admin";
$dbname = "test";
```

Now u can open browser and search: 

```
192.168.0.127:8085/login.php
```
