<?php 
	
	//define("BASE_URL", "http://localhost/Mantenedor/");
	const BASE_URL = "http://localhost/Mantenedor";

	//Zona horaria
	date_default_timezone_set('America/Santiago');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_mantenedor";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Mantenedor";
	const EMAIL_REMITENTE = "no-reply@abelosh.com";
	const NOMBRE_EMPESA = "Mantenedor";
	const WEB_EMPRESA = "www.prueba.com";
	
 ?>