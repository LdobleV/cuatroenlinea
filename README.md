# AAT - Cuatro en Linea

El juego de 4 en linea, se juega de a 2 y cada jugador se va tomando turnos para lanzar una bolita desde arriba del tablero, el primero jugador en formar una linea tanto diagonal, horizonal o vertical gana la partida. Este proyecto esta creado utilizando el framework de laravel y utlizando PHP.


## Programas necesarios
Para que el programa corra correctamente se va a necesitar de los siguientes 
- DDEV (https://ddev.readthedocs.io/en/stable/)
- Docker Desktop (https://docs.docker.com/desktop/)
- Composer (https://getcomposer.org/download/)

<br/>



## 1- Crear una carpeta
Lo primero que vamos a hacer es crear una carpeta donde crear el 4 en linea. Para ello vamos a hacer un directorio en donde queramos y luego vamos a utilizar ``git clone https://github.com/LdobleV/cuatroenlinea``. Una vez hecho esto vamos a pasar al siguiente paso.

### Docker
Hay que tener docker abierto antes de iniciar el procedimiento porque sino da error.

## 2- Iniciar DDEV
Lo primero que vamos a hacer es abrir la consola y vamos a utilizar el comando ``cd`` para meternos en el directorio ``cuatroenlinea`` que copiamos con git.
Primero nos va a pedir el nombre pero vamos a apretar ``enter`` para que se le asigne el nombre del directorio directamente, luego nos pide la ruta del documento raìz del proyecto, para la cual vamos apretar ``enter`` directamente para que se asigne solo, y por ultimo nos va a pedir el tipo de proyecto, para el cual vamos a establecerle ``laravel``

## 3- Composer
Nuestro gestor de dependencias es ``Composer`` y es el que se encarga de el php de nuestro proyecto. Para ver si esta actualizado vamos a utilizar ``ddev composer update``

## 4- Archivo de ambiente y clave de proyecto
Aqui vamos a crear  el archivo de ambiente de nuestro proyecto, para hacerlo vamos a copiar el ejemplo en el archivo .end con ``cp .env.example .env``. Luego vamos a necesitar una clave de proyecto, la cual vamos a crear usando ``php artisan key:generate``.

## 5- Empezar la pagina
Para hacer que la pagina empiece a correr vamos a utilizar el comando ``ddev start``, el cual al terminar nos va a tirar un link que se ve mas o menos como ``http://cuatroenlinea.ddev.site``. Si cuando entramos lo que vemos es esto, significa que todo funciona en orden y podemos empezar a jugar.

![Page running](https://user-images.githubusercontent.com/80189792/174674690-888302f9-bce6-4e34-aaaa-5248d503fa43.png)

## 6- Como jugar
Para jugar vamos a ir a, si nuestro link fuese el que especifique antes, ``http://cuatroenlinea.ddev.site/jugar/1``, una vez en la pagina, simplemente haciendo click en la parte superior del tablero y jugando por turnos segun el color de la bolita ya podemos empezar a jugar.

## 7- Terminar
Para cerrar la pagina y que deje de funcionar, solo tenemos que utilizar ``ddev stop``.
