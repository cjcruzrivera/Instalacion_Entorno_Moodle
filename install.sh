#!/bin/bash

sudo apt-get update

#Eliminando versiones viejas de docker 
sudo apt-get remove docker docker-engine docker.io

sudo apt-get install \
     apt-transport-https \
     ca-certificates \
     curl \
     gnupg2 \
     software-properties-common


sudo add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/debian \
   stretch \
   stable"

sudo apt-get update

sudo apt-get install docker-ce

docker pull cjcruzrivera/moodle

docker run -dtip 81 --restart always --name moodle34 cjcruzrivera/moodle