<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=DHT11;charset=utf8', 'root', '914=GE-FèR/poolm');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

