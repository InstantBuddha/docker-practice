# docker-practice

to stop:
```sudo docker compose down```
and/or
```sudo service mysql stop```
and
```sudo service apache2 stop```

to purge stuff:
```sudo docker system prune```

## The working alpine Dockerfile:

**build it:**
```
docker build -t php-practice-new .
```
run it solo 
```
docker run -it -p 8080:80 --name php-practice-2 php-practice-new

```

OR create network

```
docker network create my-network
```

**and run it under it:**

```
docker run -it -d -p 8080:80 --network my-network --name php-practice-new php-practice-new
```

build and run mySql like (restart might be needed on the docker Daemon):

```
docker build -t custom-mysql .
docker run -d --network my-network --name mysql-container -p 3306:3306 custom-mysql
```

## Working with Bind mounting

Build the file as before:

```
docker build -t php-practice-new .
```

Run it with network and Bind mounting:
```
docker container run -d --name php-practice-new -p 8083:80 -v ${pwd}:/usr/src/myapp --network my-network php-practice-new
```