# Biblioteca CRUD

Este proyecto es una aplicación web para la gestión de una biblioteca, que permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre libros, autores y editoriales.

## Estructura del Proyecto

El proyecto está organizado en las siguientes carpetas y archivos:

- `CRUP/author/`: Contiene los archivos relacionados con la gestión de autores.
    - `addAuthor.php`: Formulario para agregar un nuevo autor.
    - `author.php`: Clase `Author` que representa a un autor.
    - `crudAuthor.php`: Clase `CrudAuthor` que maneja las operaciones CRUD para autores.
    - `manageAuthor.php`: Archivo que gestiona las solicitudes para crear, actualizar y eliminar autores.
    - `showAuthors.php`: Muestra una lista de todos los autores.
    - `updateAuthor.php`: Formulario para actualizar los datos de un autor existente.

- `CRUP/book/`: Contiene los archivos relacionados con la gestión de libros.
    - `addBook.php`: Formulario para agregar un nuevo libro.
    - `book.php`: Clase `Book` que representa a un libro.
    - `crudBook.php`: Clase `CrudBook` que maneja las operaciones CRUD para libros.
    - `manageBook.php`: Archivo que gestiona las solicitudes para crear, actualizar y eliminar libros.
    - `showBook.php`: Muestra una lista de todos los libros.
    - `updateBook.php`: Formulario para actualizar los datos de un libro existente.

- `CRUP/publisher/`: Contiene los archivos relacionados con la gestión de editoriales.
    - `addPublisher.php`: Formulario para agregar una nueva editorial.
    - `publisher.php`: Clase `Publisher` que representa a una editorial.
    - `crudPublisher.php`: Clase `CrudPublisher` que maneja las operaciones CRUD para editoriales.
    - `managePublisher.php`: Archivo que gestiona las solicitudes para crear, actualizar y eliminar editoriales.
    - `showPublisher.php`: Muestra una lista de todas las editoriales.
    - `updatePublisher.php`: Formulario para actualizar los datos de una editorial existente.

- `CRUP/styles/`: Contiene los archivos CSS para el estilo de la aplicación.
    - `author/`: Estilos para las páginas relacionadas con autores.
    - `book/`: Estilos para las páginas relacionadas con libros.
    - `publisher/`: Estilos para las páginas relacionadas con editoriales.
    - `index.css`: Estilos para la página principal.

- `CRUP/conexion.php`: Archivo para la conexión a la base de datos.

- `CRUP/index.php`: Página principal de la aplicación.

- `CRUP/tablesCrud.sql`: Script SQL para crear las tablas de la base de datos.

## Instalación

1. Clona el repositorio en tu máquina local.
2. Configura tu servidor web (por ejemplo, XAMPP) y asegúrate de que el servidor MySQL esté en funcionamiento.
3. Importa el archivo `tablesCrud.sql` en tu base de datos MySQL.
4. Configura la conexión a la base de datos en el archivo `conexion.php`.
5. Abre el navegador y navega a `http://localhost/CRUP/index.php` para acceder a la aplicación.

## Uso

- Para agregar, ver, actualizar o eliminar libros, autores o editoriales, utiliza los enlaces proporcionados en la página principal (`index.php`).

## Contribuciones

Las contribuciones son bienvenidas. Por favor, abre un issue para discutir cualquier cambio importante antes de enviar un pull request.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo `LICENSE` para más detalles.
