# AGA-OSL-Web-App
Directorio para el Proyecto Web AGA-OSL

[Aplicación desplegada en GoogleAppEngine](http://aga-osl-web.appspot.com/)

[Primera prueba con SimpleTest](http://aga-osl-web.appspot.com/phpUnit.php)

###Instalación:

En primer lugar clonamos nuestro repositorio haciendo:

	git clone https://github.com/JAntonioMarin/AGA-OSL-Web-App.git

![IMAGEN1](http://i59.tinypic.com/34dhiiw.jpg)

Ahora nos vamos a [Google Developers Console](https://console.developers.google.com/) y le damos a Crear Proyecto: 

![IMAGEN2](http://i61.tinypic.com/fue4m.jpg)

Deberemos modificar el application ID y ponerle el nuestro (**starry-sunup-844**) al fichero app.yaml ubicado en el directorio principal de nuestro subrepositorio, es decir: AGA-OSL-Web-App/app.yaml:

![IMAGEN3](http://i58.tinypic.com/5vw4cy.jpg)

Para instalar el Google App Engine SDK en Linux deberemos ingresar en [esta dirección](https://cloud.google.com/appengine/downloads), seleccionar Google App Engine for PHP, y bajarnos la version para Linux/Other Platforms:

![IMAGEN4](http://i60.tinypic.com/2cad79.jpg)

1. Para descomprimir el fichero App Engine PHP hacemos:

	`unzip google_appengine_1.9.17.zip`

2. Debemos asegurarnos que tenemos instalado Python 2.7, para ello hacemos:

	`/usr/bin/env python -V`

	la salida ha de ser 2.7.X:

	![IMAGEN5](http://i58.tinypic.com/j8pqpf.jpg)

	En caso de no tenerlo instalado, hacemos:
	
    ```
	sudo add-apt-repository ppa:fkrull/deadsnakes
    sudo apt-get update
    sudo apt-get install python2.7
    ```

3. Instalar la version 5.4 de php-cgi. PHP no viene empaquetado en la mayoría de las distribuciones Linux, así que la manera más fácil es instalarlo desde la fuente directamente. En sistemas Linux basados en Debian, podemos usar los siguientes comandos para instalar PHP 5.4 de manera que no afecta  a otras versiones de PHP que tengamos instaladas:
 ```
  sudo apt-get install gcc libmysqlclient-dev libxml2-dev
  wget --trust-server-names http://us2.php.net/get/php-5.4.25.tar.bz2/from/us1.php.net/mirror
  tar -xvf php-5.4.25.tar.bz2
  cd php-5.4.25
  ./configure --prefix=$PWD/installdir --enable-bcmath --with-mysql
  make install
  cd -
```

4. Instalar MySQL en nuestra máquina local. (Lo necesitaremos para probar nuestra app localmente). Para ello usamos el siguiente comando:
 	
    ```
        sudo apt-get install mysql-server-5.5
    ```
    Se te pedirá que introduzcas una contraseña para el root de MySQL, asegúrate de recordarla.

###Subir la aplicación:

Para subir nuestra aplicacion a nuestra página web, lo haremos a través del fichero **appcfg.py**. Para ello ejecutamos:

	google_appengine/appcfg.py update AGA-OSL-Web-App

Debemos introducir nuestra dirección de gmail y nuestra contraseña:

![IMAGEN6](http://i61.tinypic.com/k36iih.jpg)

Ahora ingresamos en nuestra url http://starry-sunup-844.appspot.com/ y comprobamos que está funcionando:

![IMAGEN7](http://i61.tinypic.com/294t4eo.jpg)






























































