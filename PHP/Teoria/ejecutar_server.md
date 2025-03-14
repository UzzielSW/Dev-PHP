# Informacion de uso

### fichero base de localhost XAMPP
En XAMPP la ubicacion del localhost es **C:\xampp\htdocs**
como carpeta base y se debe crear las carpetas correspondientes para los programas.

### Importar archivos externo
```php
include 'file';
```

### Usar el servidor web integrado en la propia instalación de PHP
nos dispensa de la necesidad de disponer de cualquier otro software de servidor web.

Este comando lo tienes que lanzar desde la carpeta donde quieras servir la web, es decir, desde lo que sería el "Document Root" del servidor web que vamos a iniciar.

```
php -S localhost:8080
```

Para acceder o ejecutar el programa o archivo php tenemos que escribir en el explorador:
```
localhost:8080/nombre_archivo.php
```

Acceso desde otros dispositivos
ntonces podemos iniciar el servidor indicando nuestra IP de red local. Por ejemplo:

```language
php -S 192.168.0.3:8000
```

Entonces tendremos acceso al servidor a través de esa IP:
```language
http://192.168.0.3:8000
```

Esto nos dará como salida toda la información que necesitamos para saber cómo acceder a este servidor web local que se ha arrancado.

### Cuándo se recomienda usar el servidor integrado en el ejecutable de PHP?

Primero habría que aclarar que el servidor integrado de PHP es una alternativa únicamente adecuada para entorno de desarrollo. Es un servidor limitado que no se recomienda usar en un entorno de producción. Es decir, lo puedes usar para desarrollar pero no para un servidor público al que vayan a conectarse los usuarios finales.


En resumen, recomendamos el Built-in web server de PHP cuando solamente necesites ejecutar cierto código que tengas en alguna carpeta, de una manera rápida, ya que te ahorra la configuración de un servidor web. Dicho de otro modo, no necesitas instalar ningún software adicional en tu sistema, aparte del propio PHP.