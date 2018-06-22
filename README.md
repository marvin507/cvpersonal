# cvpersonal
csm personal

sistema de gestion de contenido dedicado para personas que quieran mostrar su cv en la web...version en desarrollo.

**¿Como probar el proyecto?**

1. Descarga o clona el proyecto.


2. En caso de que bajaste el archivo, extraerlo. Una vez Extraido copiar carpeta en tu servidor local. 

3. Dentro del proyecto crear una carpeta donde estara toda la aplicacion como tal. Por ejemplo: "aplicacion" y cortar todos los archivos menos la carpeta public. Una vez hecho esto cortar los archivos de la carpeta public y pegarlo fuera (osea dentro del proyecto en si), luego de esto se puede eliminar la carpeta public, ya que estará vacia.

4. Editar el archivo index.php, en la linea donde dice require __DIR__.'/../vendor/autoload.php' reemplazar por require __DIR__.'/../aplacion/vendor/autoload.php', al igual en la linea $app = require_once __DIR__.'/../bootstrap/app.php' por $app = require_once __DIR__.'/../aplicacion/bootstrap/app.php';

