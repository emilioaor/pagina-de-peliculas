Cine en Casa
=============================================

Página web de películas con contenido autoadministrable

Niveles de usuarios:
--------------------------------------------------------------------------------

#### Admin:

* Registrar películas
* Actualizar links caidos

#### Normal:
* No requieren autenticación
* Visualizar todo el contenido de la web, videos, enlaces, etc


Instalación
------------------------------------------------------------------------------
1. Renombrar el archivo **.env.example** por **.env** en la raíz del proyecto

2. En la raíz del proyecto ejecuta el siguiente comando para instalar dependencias de backend

        composer install


3. Configurar los datos de conexion a la base de datos

4. Ejecutar el siguiente comando para generar la base de datos:

        php artisan migrate

5. Puedes probar fácilmente la aplicación con el siguiente comando:

        php artisan serve

    Con esto te puedes conectar por la siguiente url: **http://localhost:8000**
