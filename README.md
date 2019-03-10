
## Especificaciones Técnicas.
* Version Php (7.3)
Se requiere de las dependencias indicadas en el composer.json
* Version Nodejs (v10.15.1)
* Version NPM (6.8.0)

### Instalación básica para configurar el proyecto
*
  **run** composer install

      crea una carpeta /vendor
*
  **run** npm install

      crea una carpeta llamada /node_modules

      Recordando estar ubicado dentro del repositorio previamente descargado (terminal).

### Correr migraciones tomando en cuenta que se debe habilitar la conexion a Mysql.
* php artisan migrate


**Transpilar el fron-end para desarrollo**
* **run** npm run watch

      watch se mantiene escuchando que cambios se hacen tanto en el Javascript y en el sass.
      Transpilar ó compilar al momento de desarrollar
* **run** npm run production

      Transpilar el front-ent subir a origin master ó producción.
      esto le baja peso a los archivos compilados
      proporcionando un mejor performance a la aplicación

# Recomendación


  | Verificar la documentación en la página de Laravel para más información https://laravel.com/docs/5.7/mix |
  |:-------|
  | También se recomienda leer acerca de webpack que es lo que por defecto viene con laravel para compilar el front para vuejs por defecto https://webpack.js.org/ |
