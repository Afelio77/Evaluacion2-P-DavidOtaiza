Nombre de la Universidad y Carrera:

-Universidad Politecnica Territorial del Estado Aragua Federico Brito Figueroa "UPT Aragua"

-P.N.F Informática 

-Sección: 1

-Trayecto: 2

-FASE III
 
Nombres completos de los integrantes:

-José Alejandro Páez Olivo    C.I: 31.756.423

-Josvay Alejandra Páez Olivo  C.I: 31.756.424

Enunciado asignado:

-Enunciado 6: Consecionario

Instrucciones breves para ejecutar el proyecto:

1-Abrir la terminal: Abre una terminal (Git Bash por comodidad) dentro de la carpeta del proyecto

2-Instalar dependencias: Ejecuta este comando para descargar las carpetas necesarias de Laravel:  composer install

3-Configurar el archivo .env: Busca el archivo .env.example, cámbiale el nombre a .env

  Abre ese archivo .env y asegúrate de que diga: DB_CONNECTION=sqlite

4-Crear la Base de Datos:

  Dentro de la carpeta database, crea un archivo nuevo vacío llamado database.sqlite

5-Preparar la aplicación: Ejecuta estos dos comandos en orden:

  php artisan key:generate
  
  php artisan migrate:fresh --seed

6-Ver el proyecto:

  Ejecuta el comando: php artisan serve
  
  Abre en el navegador: http://127.0.0.1:8000/vehiculos
