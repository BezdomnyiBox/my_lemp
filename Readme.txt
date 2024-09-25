В данном проекте с помощью docker compose развернуты три контейнера: nginx, mysql, php-fpm.
Реализован простейший дамп БД.

1) Открыть терминал линукс в этой папке
Проверить свободны ли порты:
sudo netstat -pna | grep 80
sudo netstat -pna | grep 9000
sudo netstat -pna | grep 3310

Если занят то остановить службу, например sudo service mysql stop

Если закрыты порты:
sudo iptables -A INPUT -p tcp --dport 80 -j ACCEPT
sudo iptables -A INPUT -p tcp --dport 9000 -j ACCEPT
sudo iptables -A INPUT -p tcp --dport 3310 -j ACCEPT

2) Ввести команды: 

sudo yum update
sudo yum install docker
sudo yum install docker-compose

3)Ввести команду:
sudo docker-compose up -d
sudo docker-compose ps -a (у всех контейнеров должно быть состояние UP)

В браузере ввести:
http://localhost (если выводится страничка докера, то http://localhost/index.php)

Для просмотра метрик:

http://localhost/metrics

Описание метрик Nginx /metrics:
Active connections — текущее количество активных соединений.
accepts — общее количество соединений, принятых сервером.
handled — количество соединений, обработанных сервером (совпадает с accepts, если нет ошибок).
requests — общее количество обработанных запросов.
Reading — количество соединений, которые Nginx читает от клиента.
Writing — количество соединений, в которые Nginx пишет ответ клиенту.
Waiting — количество keep-alive соединений, которые открыты и ожидают нового запроса.
