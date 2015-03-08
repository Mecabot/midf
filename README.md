# MiDF Web Application and Back-end

Promueve y facilita la participación de los ciudadanos en las acciones del gobierno (reportes a través de un único medio). Sensibiliza al gobierno sobre los temas cotidianos que le importan a la ciudadanía y que tienen un impacto inmediato en su calidad de vida.

Facilita la toma de decisiones y ofrece una manera de priorizar el gasto de los recursos públicos ("retweet" de los reportes). Permite el monitoreo de la actividad gubernamental por parte de la sociedad (seguimiento de los reportes por número de folio).

Ofrece una herramienta para medir y comparar la eficacia y eficiencia en la resolución de problemas similares entre sucursales de las agencias y entre delegaciones (benchmarking) y ofrece la oportunidad de localizar (y adoptar) las mejores prácticas.

Mejora la calidad de vida de los ciudadanos al resolver los problemas que realmente le importan. Le da al ciudadano un sentido de pertenencia y lo coloca en el centro de la acción pública.


## Índice de contenido

- [Dependencias](#dependencies)
- [Configuración](#config)
- [Configuración de desarrollo local](#config-local)
- [Despliegue](#show)

<a name="dependencies"></a>
## Dependencias
La aplicación fue desarrollada y probada en equipos Windows 7,8 con Google Chrome > 40.x. Para instalar un ambiente de desarrolo local necesitas lo siguiente

* **Xampp:** [Xampp](https://www.apachefriends.org/download.html) es una distribución de Apache completamente gratuita y fácil de instalar que contiene MySQL y PHP.
* **MySQL Workbench:** [Workbench](http://dev.mysql.com/downloads/workbench/) es un [IDE](http://es.wikipedia.org/wiki/Entorno_de_desarrollo_integrado) OpenSource que te permite interactuar con servidores de Bases de Datos de manera sencilla y eficiente.
* **Data dump:** [Descarga](http://bi.linio.com/hack/dump.zip) una copia de las bases de datos utilizadas por este proyecto.

<a name="config"></a>
## Configuración
La única configuración 100% indispensable es que tu copia del código fuente esté en el directorio:

`XAMPP_INST_DIR\htdocs`

donde **XAMPP_INST_DIR** en el *path* donde instalaste Xampp.

<a name="config-local"></a>
## Configuración de desarrollo local
### Código fuente
[Clona](http://gitref.org/creating/#clone), [haz un *fork*](https://help.github.com/articles/fork-a-repo) o descarga un zip de [nuestro proyecto](https://github.com/saul-mtz/midf).

### Datos
Ingresa a tu BD local que instalaste con Xampp e importa los datos siguiendo estos pasos:
    
* Descomprime el zip que descargaste anteriormente en una locación que sea accesible por cualquier usuario.

* En *Workbench* haz clic en la opción **Import Data**
<div align="center"><img src="http://bi.linio.com/hack/screen1.png"></div>

después selecciona **Import from Self-Contained File**
<div align="center"><img src="http://bi.linio.com/hack/screen2.png"></div>

* Por último haz clic en el botón **Start Import** y espera a que la importación termine.

Por seguridad el archivo que contiene las credenciales para acceder a la bd debe estar fuera del repositorio público. Dentro de tu carpeta raíz del proyecto crea un archivo con el nombre **credentials.php** en la siguiente ruta:

`XAMPP_INST_DIR\htdocs\midf\midf\protected\config\credentials.php`

en ese archivo escribe los parámetros de conexión a tu BD local, por ejemplo:
```
<?php
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'miiyosto_hackdf');
  define('DB_USER', 'root');
  define('DB_PASS', '');
?>
```

### Directorios del proyecto
      framework/           archivos del framework
      midf/                archivos del proyecto actual
      midf/css             archivos CSS para el proyecto MiDF
      midf/js              scripts
      midf/images          imágenes del proyecto
      

<a name="show"></a>
## Despliegue
para acceder al proyecto ve a la URL:
`http´://localhost/midf/midf`