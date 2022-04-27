 <?php
	require ("lib/mod004_presentacion.php");
   
	$divCabecera  = mod004_Cabecera();
    $tableAllArticulos = mod004_getAllArticulos();
	$optionsIva = mod004_getAllTipoIva();
	$optionsGruposArticulos = mod004_getAllGrupo();
	$divPiePag    = mod004_PiePag();

	require ("vista/vista_ArticuloFormulario_Update.php");
?>

