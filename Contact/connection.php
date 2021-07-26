<?php
 
 
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "id4460568_snps";
 $dbpass = "snps2018";
 $dbname = "id4460568_contact";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>