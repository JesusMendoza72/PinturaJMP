<?php
	session_start();
    require ("lib/mod004_presentacion.php");
	  
	$divCabecera  = mod004_Cabecera();
	// $divContenido = mod004_Contenido();
	$divPiePag    = mod004_PiePag();

	require ("vista/vista_Login.php");
?>

