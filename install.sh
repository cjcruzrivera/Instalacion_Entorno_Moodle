#!/bin/bash

###############################################################################
### Instalación del entorno de desarrollo de la estrategia ASES para debian ###
###############################################################################

echo 'deb http://apt.postgresql.org/pub/repos/apt/ stretch-pgdg main' >> /etc/apt/sources.list.d/pgdg.list

wget --quiet -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc | sudo apt-key add -

sudo apt-get update

#Eliminando versiones viejas de docker 
sudo apt-get remove docker docker-engine docker.io

sudo apt-get install \
     apt-transport-https \
     ca-certificates \
     curl \
     gnupg2 \
     software-properties-common \
     postgresql-9.6-server \
     postgresql-9.6   

sudo -u postgres bash -c "psql -c \"CREATE USER ubuntu WITH PASSWORD 'talentos';\""

sudo -u postgres bash -c "psql -c \"CREATE DATABASE moodle34 OWNER ubuntu;\""

sudo -u postgres bash -c "psql -d moodle34 -f moodle_33_june_3.sql"

cd docker_moodle34

curl -fsSL https://download.docker.com/linux/debian/gpg | sudo apt-key add -

sudo add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/debian \
   $(lsb_release -cs) \
   stable"

sudo apt-get update

sudo apt-get install docker-ce

sudo curl -L https://github.com/docker/compose/releases/download/1.21.2/docker-compose-$(uname -s)-$(uname -m) -o /usr/local/bin/docker-compose

sudo chmod +x /usr/local/bin/docker-compose

docker-compose up