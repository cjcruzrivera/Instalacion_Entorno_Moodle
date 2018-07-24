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

$ psql -c \"CREATE USER ubuntu WITH PASSWORD 'talentos';\"
$ psql -c \"ALTER ROLE ubuntu WITH SUPERUSER\"
$ psql -c \"CREATE DATABASE moodle34 OWNER ubuntu;\"
~~~ 
>Posteriormente descargar el archivo backup del siguiente enlace solicitando permisos al área de sistemas propietarios del archivo.  
[Backup Base de Datos][backup]  
Y restuarar el archivo en la base de datos creada

[backup]: https://drive.google.com/open?id=1to_ntCJcGlqnYK5xkSS_4oZTjxhSgi6M

```shell
$ psql -U ubuntu -d moodle34 -f /ruta/del/archivo_descargado.sql
```
