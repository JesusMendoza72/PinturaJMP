 <?php
    session_start();
	require ("lib/mod004_presentacion.php");
	
    if ( isset( $_GET[ "page" ] ) ) {
        $numPage = intval( $_GET[ "page" ] );
        if ( $numPage < 1 ) {
            $numPage = 1;
        }
    } else {
        $numPage = 1;
    }

    $numRowsPerPage = 4;

    $divCabecera  = mod004_Cabecera();
    $tableGrupo   = mod004_getGruposPaginacion( $numPage, $numRowsPerPage );
    $divPiePag    = mod004_PiePag();

	require ("vista/vista_GruposPaginacion.php");
?>

