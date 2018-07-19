#!/bin/bash

sudo apt-get update
sudo apt-get upgrade -y
echo "actualizadas librerias"

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
   $(lsb_release -cs) \
   stable"

sudo apt-get update

sudo apt-get install docker-ce


