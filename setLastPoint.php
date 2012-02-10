<?php
//Connect to the MySQL Database:
mysql_connect('fdb2.awardspace.com','961436_crossatk','crossa.tk');
@mysql_select_db('961436_crossatk') or die( "Unable to select database");

// SQL query:
$query="UPDATE crossatk SET lastPoint='".$_GET['x'].",".$_GET['y']."' WHERE game=".$_GET['game'];
mysql_query($query) or die( mysql_error() );
mysql_close();
?>
