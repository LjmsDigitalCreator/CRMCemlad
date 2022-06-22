# CRMCemlad
## Requisitos de despliegue
- Tener instaldo Xampp, Lampp o Mapp
- Tener clonado el proyecto de manera local
- Colocar el proyecto en la carpeta correspondiente para el despliegue

## Creación de la base de datos
En la carpeta public, encontraremos una carpeta denominada **database** en la que se encontrarán los scripts con los que funciona el sistema.

Se detallará los pasos que se deben seguir para la creación de la base de datos con las información mínima necesaria para el funcionamiento del sistema.

0. En el archivo **insertUser.sql** se puede modificar la información de los registros que ahí se encuentran, pero cabe destacar que, deben existir al menos 3 roles. El primero debe ser **"root"** que será el del usuario administrador. El segundo sería **"student"** para alumnos, y el último **"prospect"** el cual sería un posible cliente. Una vez hecho esto, podrá probar el sistema con cada usuario.

2.  Ejecutar el sistema gestor de base de datos de MySQL e ingresar a el.
3. Copiar el contenido del archivo de los siguientes archivos y ejecutarlos en orden que se indica acontinuación
	- **db.sql**
	- **insertCareer.sql**
	- **insertQuestion.sql**
	- **insertUser.sql**

## Imágenes
Si desea agregar imágenes al proyecto, debe crear una carpeta en public, esta se debe denominar img y en ella colocar sus imágenes. Deberá ir a los archivos y cambiar la ruta a la imagen que haya colocado en la carpeta
