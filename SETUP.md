## Setup
1. Ensure stop others mysql containers
```
docker rm -f $(docker ps -a -q)
```

2.
```
docker compose build
```

3.

```
docker compose up
```


## Check mysql connection

```
mysql -h 127.0.0.1 -u user -ptest myDb
```


## Check mysql connection

Ypu can edit the index.php file
```
www/index.php
```
