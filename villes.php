<?php
/**
 * Created by PhpStorm.
 * User: Emmanuelle
 * Date: 26/02/2016
 * Time: 18:02
 */
$file    = file_get_contents( "towns.txt" );
$villes  = unserialize( $file );
$results = [ ];
$number  = 0;
$text    = "Aucune ville en correspond à votre recherche";

if ( isset ( $_POST['findme'] ) && $_POST['findme'] != '' ) {
	$findme = $_POST['findme'];

	foreach ( $villes as $ville ) {
		$pos = stripos( $ville, $findme );
		if ( $pos === 0 ) {
			array_push( $results, $ville );
			$number ++;
		}
		sort( $results );
		$text = implode( '|', $results );
	}
}
echo $text;