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

build and run it:
```
docker build -t php-practice-2 .
docker run -it -p 8080:80 --name php-practice-2 php-practice-2

```
