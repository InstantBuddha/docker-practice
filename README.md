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

build it:
```
docker build -t php-practice-2 .
```
run it:
```
docker run -it --rm --name my-running-app php-practice-2
```