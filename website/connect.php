<?php
$mysqli = new mysqli("localhost", "root", "", "sitesolutions");
/* 
   Met de voorgaande lijn maken we een verbinding met de databank met de naam cursussql.  
   Onze server is localhost, onze gebruikersnaam root en we hebben geen paswoord ingesteld.
   $mysqli = new mysqli("localhost", "user", "password", "database");
*/
$aanpassenUTF = $mysqli->query("SET NAMES utf8");
/* 
   Met de voorgaande lijn zorg ik dat de Franse karakters in mijn tabel correct afgedrukt worden.
*/
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
/* 
   Met de voorgaande lijn druk ik een foutcode af als de connectie niet geslaagd zou zijn
	 Gebruik consequent het afdrukken van foutcodes: het maak het makkelijker om problemen te vinden en zal je tijd besparen.
*/
?>