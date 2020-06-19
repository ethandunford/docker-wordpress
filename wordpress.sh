echo "==> creating wordpress-network"
docker network create -d bridge wordpress-network || true

echo "==> removing old containers"
docker stop site

echo "==> spinning up new wordpress"
docker run \
--rm \
--name site \
--network=wordpress-network \
-p 8001:80 \
-d \
-v "$(pwd)":/root \
-v "$(pwd)/themes":/var/www/html/wp-content/themes \
wordpress:5.3.2-php7.4-apache

sleep 10
echo "==> injecting config"
docker exec -it site /bin/bash  \
-c "cp /root/wp-config.php /var/www/html/" \
-c "chown -R www-data:www-data /var/www/" \
-c "chmod -R 766 /var/www/"

sudo chmod -R 777 themes/