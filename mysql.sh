echo "==> creating wordpress-network"
docker network create -d bridge wordpress-network || true

echo "==> removing old containers"
docker stop db

echo "==> spinning up new mysql"
docker run \
-v "$(pwd)":/root \
--rm \
--network=wordpress-network \
--name db \
-d \
-p 3306:3306 \
-e MYSQL_ROOT_PASSWORD=password \
mysql:latest
sleep 20

echo "==> seeding db"
docker exec -it db /bin/bash  \
-c "mysql -u root -ppassword < /root/seed.sql"

docker exec -it db /bin/bash  \
-c "mysql -u root -ppassword --database=wordpress< /root/wordpress.sql"