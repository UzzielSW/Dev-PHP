Sitio Sticket

Paginas principales(archivos):
	* Cndex
	* Compra estacionamiento
	* Compra boleto
	* Pagar

Paginas secundarias:
	* Login
	* Register

Carpetas:

CSS: carpeta de estilos
JS: funcionalidad del sitio
PHP: logica del sitio y modulos del sitio
img y fonts: recursos adicionales
sql: recursos de base de datos

Archivos:

blank.html: molde para las demas paginas

Modulos de pagina:
<?php require 'php/head.php'?>
<?php require 'php/logo.php'?>
<?php require 'php/social.php'?>
<?php require 'php/footer.php'?>
<?php require 'php/scripts.php'?>


Transferencia de datos por formularios (compra)

comprarB:
	opcTribuna		-> opcion de tribuna
		id=TIPO
	opcCantidad		-> cantidad de boletos
		id=CANT
	comprarB		-> submit

comprarE:
	opcion			-> opcion de estacionamiento
		id=TIPO
	cantidad		-> cantidad de estacionamientos
		id=CANT
	comprarE		-> submit	