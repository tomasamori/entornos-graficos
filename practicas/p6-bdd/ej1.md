a. Para establecer una conexión con un servidor de base de datos MySQL, se utiliza la función `mysqli_connect`. Esta función se emplea para iniciar la conexión con el servidor MySQL.

b. Los parámetros de `mysqli_connect` incluyen el nombre del host (`$host`), el nombre de usuario (`$usuario`), y la contraseña (`$contrasena`). Estos son generalmente necesarios para la autenticación en el servidor de la base de datos MySQL.

c. Después de abrir la conexión, puedes seleccionar una base de datos activa usando `mysqli_select_db`. Esta función se utiliza para cambiar la base de datos en la que se realizarán las consultas posteriores.

d. La función `mysqli_select_db` toma dos parámetros: la conexión a la base de datos (la variable que almacena la conexión a MySQL) y el nombre de la base de datos.

e. `mysqli_query` se utiliza para enviar consultas SQL al servidor de la base de datos y ejecutarlas en la base de datos activa.

f. Los parámetros de `mysqli_query` incluyen la conexión a la base de datos y la consulta SQL.

g. La cláusula `or die()` se usa para manejar errores que puedan ocurrir durante la ejecución de una consulta. Ayuda a mostrar un mensaje de error si la consulta falla.

i. `mysqli_error()` se utiliza para obtener una descripción del error que ocurrió en la última operación de MySQL realizada con la conexión proporcionada.

j. El código PHP mostrado recorre y muestra las filas de resultados en una tabla HTML con 3 columnas. Además, libera los recursos asociados al conjunto de resultados con `mysqli_free_result` y cierra la conexión a la base de datos con `mysqli_close` para liberar recursos.