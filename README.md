# Empleados-Empresa

#### Meliendrez Agustín

## Consideraciones

Para la resolución del ejercicio, se pensó en la adopción de una arquitectura,principalmente, con el modelo MVC (Model, View, Controller).
Al no especificarse cual era la amplitud del ejercicio (back-end, front-end), se realizo una implementación que contemple ambas caracteristicas.
Para ello, también se utilizo una conexion a una base de datos MySql (phpmyadmin). Dentro de la ejecución e inicialización de la aplicacion, ya está considerada la auto-creación de la base de datos, como asi también el ingreso de datos iniciales.
Teniendo en cuenta esto ultimo, cabe destacar que se utilizo las conexiones apache y MySql del programa XAMPP.
A su vez, en caso de querer utilizar una base de datos especifica, modificar los valores de conexión que se encuentra en la carpeta "config", en el archivo "db-config.php".


## Ejercicio planteado

Crear las clases necesarias para administrar los Empleados de una Empresa. Cada empleado puede ser de distinto tipo como ser, Programador, Diseñador.

### Estructura de clases:
* Empresa:
    * Id
    * Nombre
    * Empleados
* Programador:
    * Id
    * Nombre
    * Apellido
    * Edad
    * Lenguaje en el que programa( pueden ser: PHP, NET o Python  )
* Diseñador
    * Id
    * Nombre
    * Apellido
    * Edad
    * Tipo de diseñador( pueden ser: Gráfico o Web )

En Empresa, tengo que poder:
* Agregar Empleados
* Obtener un listado de todos los Empleados
* Buscar por Id y obtener un Empleado
* Obtener el promedio de edad de los empleados
