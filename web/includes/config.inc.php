<?php
$ablakcim = array(
    'cim' => 'NJE - Webprogramozás I.',
    'kepforras' => 'logo_black.png'
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
	'cim' => 'Webprogramozás I. beadandó webalkalmazás',
	'motto' => ''
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'BP28K1'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Főoldal', 'menun' => array(1,1)), //1
	'starship' => array('fajl' => 'starship', 'szoveg' => 'Starship', 'menun' => array(1,1)), //2
	'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)), //3
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)), //4
    'message' => array('fajl' => 'message', 'szoveg' => '', 'menun' => array(0,0)), //5
    'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(1,1)), //6
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)), //7
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)), //7.1
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0)), //7.2
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)) //8
    
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

// Connection info to MySQL database
$db_name = "njeweb1db";

//$db_hostname = "localhost"; //when running in prod, use this hostname
//$db_username = "njeweb1db"; //when running in prod, use this username
//$db_password = "test"; //when runnin in prod, use this password

//$db_hostname = "nje-web1-db"; //when running in docker, use this hostname
//$db_username = "root"; //when running in docker, use this username
//$db_password = "test"; //when running in docker, use this password

$db_hostname = "localhost"; //when running in xampp, use this hostname
$db_username = "root"; //when running in xampp, use this username
$db_password = ""; //when running xampp use this password
?>