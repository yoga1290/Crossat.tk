<?php
//Connect to the MySQL Database:
mysql_connect('fdb2.awardspace.com','961436_crossatk','crossa.tk');
@mysql_select_db('961436_crossatk') or die( "Unable to select database");

// SQL query:
$query="SELECT lastPoint FROM crossatk WHERE game = ".$_GET['game'];
$result=mysql_query($query) or die( mysql_error() );


if(mysql_numrows($result)<1)
	echo "0,0";
else
	echo mysql_result($result,0,"lastPoint");

mysql_close();
?>
