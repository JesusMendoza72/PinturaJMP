 <?php
	require ("lib/mod004_presentacion.php");

    if ( isset( $_GET[ "Id" ] ) ) {
        $Id = $_GET[ "Id" ];
        $divCabecera  = mod004_Cabecera();
        $strDetailArticulo = mod004_getDetailArticulo( $Id );
        $divPiePag    = mod004_PiePag();

        require ("vista/vista_ArticuloDetalle.php");
    } else {
        echo "No existe el articulo"; 
    }
?>
