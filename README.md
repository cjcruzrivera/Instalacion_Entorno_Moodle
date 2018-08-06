# INSTALACIÓN ENTORNO DESARROLLO LOCAL ESTRATEGIA ASES

> Los siguientes pasos son para instalar el entorno de desarrollo local de la estretagia ASES, Universidad del Valle.  
El proceso se encuentra especificado para instalar en Debian 9 Stretch.  
Es necesario realizar todo el proceso logueado como superusuario.

## Instalación y configuración de la base de datos
### Añadir repositorio  de postgresql
~~~
$ echo 'deb http://apt.postgresql.org/pub/repos/apt/ stretch-pgdg main' >> /etc/apt/sources.list.d/pgdg.list
~~~

### Instalar Postgresql-9.6

~~~
$ apt-get update

$ apt-get install postgresql-9.6
~~~

### Crear y configurar usuario y base de datos
>Loguearse con el usuario postgres para realizar este punto
~~~
$ su postgres

$ psql -c "CREATE USER ubuntu WITH PASSWORD 'talentos';"
$ psql -c "ALTER ROLE ubuntu WITH SUPERUSER"
$ psql -c "CREATE DATABASE moodle34 OWNER ubuntu;"
~~~ 
>Posteriormente descargar el archivo backup del siguiente enlace solicitando permisos al área de sistemas propietarios del archivo.  
[Backup Base de Datos][backup]  
Y restuarar el archivo en la base de datos creada

[backup]: https://drive.google.com/open?id=1to_ntCJcGlqnYK5xkSS_4oZTjxhSgi6M

~~~
$ psql -U ubuntu -d moodle34 -f /ruta/del/archivo_descargado.sql
~~~
>Salir del usuario postgres

Finalmente se debe [configurar el servidor para permitir conexiones externas][enlace].

[enlace]: http://www.linuxhispano.net/2011/02/15/permitir-conexiones-entrantes-a-un-servidor-postgresql/

## Instalación y configuración de Docker

* Desinstalar versiones viejas
~~~
$ sudo apt-get remove docker docker-engine docker.io
~~~
* Configurar los repositorios
~~~
$ sudo apt-get update

$ sudo apt-get install \
     apt-transport-https \
     ca-certificates \
     curl \
     gnupg2 \
     software-properties-common

$ curl -fsSL https://download.docker.com/linux/debian/gpg | sudo apt-key add -

$ sudo add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/debian \
   $(lsb_release -cs) \
   stable"
~~~

* Instalar docker-ce
~~~
$ apt-get update

$ apt-get install docker-ce
~~~

* Instalar docker-compose
~~~
$ sudo curl -L https://github.com/docker/compose/releases/download/1.21.2/docker-compose-$(uname -s)-$(uname -m) -o /usr/local/bin/docker-compose

$ sudo chmod +x /usr/local/bin/docker-compose
~~~

## Descarga y configuración de Moodle 3.4

> El sitio se debe descargar del siguiente enlace  
[Moodle 3.4][moodle34]  
Y descomprimir en la carpeta  
**/Instalacion_Entorno_Moodle/docker_moodle34**

[moodle34]: https://download.moodle.org/download.php/stable34/moodle-3.4.4.zip

* Dar permisos de escritura a las carpetas de trabajo
~~~
$ cd Instalacion_Entorno_Moodle/docker_moodle34

$ chmod -R 777 moodle/
$ chmod -R 777 moodledata/
~~~

Finalmente se levanta el contenedor donde correrá el servidor
~~~
$ docker-compose up -d
~~~
