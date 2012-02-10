<?php
//Connect to the MySQL Database:
mysql_connect('fdb2.awardspace.com','961436_crossatk','crossa.tk');
@mysql_select_db('961436_crossatk') or die( "Unable to select database");

// SQL query:
$query="INSERT INTO crossatk (lastPoint) VALUES ('0,0')";
mysql_query($query) or die( mysql_error() );

$query="SELECT COUNT(*) AS cnt FROM crossatk";
$result=mysql_query($query) or die( mysql_error() );

echo mysql_result($result,0,"cnt");

mysql_close();
?>
