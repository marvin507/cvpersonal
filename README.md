# cvpersonal
csm personal

sistema de gestion de contenido dedicado para personas que quieran mostrar su cv en la web...version en desarrollo.

**¿Como probar el proyecto?**
1. Instalar composer

2. En tu terminal ejecutar composer global require "laravel/installer".

3. Descarga o clona el proyecto.

4. Copia el proyecto en tu servidor local, luego de esto abre el proyecto en tu editor(sublime-text, atom, etc), crea un archivo que se llamará .env, copia el contenido del archivo llamado .env.example y pegalo en el nuevo o si prefieres solo renombralo a .env. Recomendación crear uno nuevo. 

En estos campos, las credenciales de tu base de datos:

	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=nombre de tu bd
	DB_USERNAME=usuario
	DB_PASSWORD= dejar vacio si no tienes pass


5. Entrar a la carpeta del proyecto desde la terminal, si tu servidor es lamp cd /var/www/html/cvpersonal-master y si en tu caso es xampp cd xampp/htdocs/cvpersonal-master y ejecutar composer install, asegurate de tener instalado composer en tu equipo. Cuando termina de instalar composer, ejecutar php artisan key:generate


6. Ejecutar php artisan migrate --seed para ejecutar las migraciones y los seeds.

7. Dentro del proyecto crea una carpeta donde estara toda la aplicacion como tal, por ejemplo: "miaplicacion", cortar todos los archivos menos la carpeta public y pegar en la carpeta recien creada "miaplicacion". Una vez hecho esto cortar los archivos de la carpeta public y pegarlo fuera (osea dentro del proyecto en si), luego de esto se puede eliminar la carpeta public, ya que estará vacia.

8. Editar el archivo index.php, en la linea donde dice require __DIR__.'/../vendor/autoload.php' reemplazar por require __DIR__.'/miaplicacion/vendor/autoload.php', al igual en la linea $app = require_once __DIR__.'/../bootstrap/app.php' por $app = require_once __DIR__.'/miaplicacion/bootstrap/app.php'. Si estás en ubuntu quizás te aparezca un error de permisos, entra a la carpeta storage por terminal que está en "miaplicacion" y ejecuta sudo chmod -R 755 storage.

9. Ejecuta el proyecto.

pd: este proyecto está en modo de prueba, si tienes alguna duda escribeme a mi correo.

**no soy experto, cada día aprendo más**




