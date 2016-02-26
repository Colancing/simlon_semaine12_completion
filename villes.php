<?php
/**
 * Created by PhpStorm.
 * User: Emmanuelle
 * Date: 26/02/2016
 * Time: 18:02
 */
$file = file_get_contents("towns.txt");
$villes = unserialize($file);
var_dump($villes);