# https://odan.github.io/2019/11/05/slim4-tutorial.html

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


adminapidevs
d3d3d36789%$#

FRONEND RUTAS

dominio.com/#/{nombre de guia}
ejemplo:  dominio.com/#/guia-eliot

dominio.com/#/{nombre de guia}/{modulo}
ejemplo: dominio.com/#/{nombre de guia}/modulo1

// actulizar ]: 
UPDATE `apidevs`.`module` SET `path_module` = '/elliot-modulo-ii' WHERE (`id_module` = '2');
 
 # ESTRUCTURA

 GUIA
 cada GUIA tiene MODULOS
 cada MODULO tiene SECCIONES

# NOTA 
las seccion nunca se muestran solas, siempre se muestran el total de seccion que existen en cada modulo

las sescciones deben llegar con un array de imagenes


[GIT en FONBIENES]
- Cada usuario trabaja sobre su propio BRANCH.

[BRANCH]
- Nomenclatura para creación de Branch
	c proyecto objeto
	u proyecto objeto
	d proyecto objeto
	
	crear branch
		git checkout -b [nombre]
	cambio de branch
		git checkout [nombre]
	
	
[CONFLICTOS]
- Conflictos mientras se ejecuta la combinación
	
	Mantener todos cambios locales General: git chekout --ours .	
	Mantener todos cambios locales por archivo: git chekout --ours [Ruta/file.*]
	
	Aceptar todos los cambios entrantes General: git chekout --theirs .	
	Aceptar todos los cambios entrante por archivo: git chekout --theirs [Ruta/file.*]

	Si hicimos merge con una BRANCH que no queriamos: git reset --merge ORIG_HEAD

- Cuando modifican la misma linea sobre el mismo branch
	paso1 : verificar el estado "git status"
	paso2 : "git rebase main"
	paso3 : git push

[ROLES]
	
- Modicar los roles 
	desde el panel de administración "ruta"
	paso 1: 
	paso 2: 

[ELIMINAR ARCHIVOS]
	 
- Eliminar arhcivos en el respositorio
	- git rm -r [Nombre del archivo]
	- git rm --cached <file>: remueve el archivo del indice, esto quiere decir, que Git ya no le hará seguimiento. Aunque el archivo seguirá existiendo en tu directorio, tal y como está.
	- git reset HEAD <file>: devuelve el archivo a su último commit y este sigue en seguimiento por git, es decir podras hacer add, commit, etc. con total normalidad.

[ARCHIVOS]
paso 1 : crear archivo en la raiz
	.ignore
paso 2: editar y listar las carpetas
		ejemplo:
			/dist
			/build