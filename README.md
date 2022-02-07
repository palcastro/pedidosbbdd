
## Ejemplo de Aplicación completa con PHP 

Siguiendo el tema 4 del Manual de clase, creamos una base de datos llamada pedidos que a su tiempo comprende las bases de datos de categorías, pedidos, pedidosproductos, productos y restaurantes. Dentro de las mismas se encuentran las tablas de contenido que después se visualizarán al abrir la página.

Creamos un directorio en nuestro ordenador y dentro del mismo varios archivos de Php que iremos poblando en función de los contenidos que vienen en el tema 4 explicados por pasos. Una vez copiados en su mayoría nos daremos cuenta de que faltan fragmentos por completar, estos se rellenarán posteriormente. 

Al poder tener acceso a las líneas de código que nos faltan, los archivos ya estarán vinculados por fin con la BBDD. Al abrir el directorio desde Laragon veremos lo siguiente:

![image](https://user-images.githubusercontent.com/91055754/152795751-b8a85d61-d86a-4a11-b0b6-321043a40a44.png)

*Entramos dentro del archivo de login.php:*
*El usuario y contraseña se encuentran en la BBDD de restaurante, en este caso para entrar se ha usado el de madrid1@empresa.com con clave 1234*
*Así, aparece una lista de categorías, dentro de las mismas están las BBDD de productos que en MySQL se encuentran en la misma tabla, pero que serán discriminadas en función de la categoría a la que pertenecen de las tres disponibles*

![image](https://user-images.githubusercontent.com/91055754/152795938-876e74e7-2b4b-4caa-8003-c239864b106b.png)

- Así se ven los apartados de 'Bebidas con', 'Bebidas sin' y 'Comida':

![image](https://user-images.githubusercontent.com/91055754/152796142-f5ba3a6f-c58d-404b-b401-c19f727817f5.png)

- Al realizar el pedido esta es la respuesta que se recibe del archivo 'carrito.php':

![image](https://user-images.githubusercontent.com/91055754/152797014-aa1ccaf5-d997-4213-a61f-792492353a59.png)

- Finalmente cuando hacemos el pedido aparecería la siguiente información conforme al registro en la BBDD:

![image](https://user-images.githubusercontent.com/91055754/152797204-3863cb83-8a56-4122-9bf2-9ce8a33b2588.png)





