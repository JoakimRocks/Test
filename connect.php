<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
echo "Connected to MySQL ";

?>

Now choose which database to connect 
<?php
//connect to mysql
mysql_connect("localhost", "root", "") or die(mysql_error());
echo "Connected to MySQL<br />";
//connect to database
mysql_select_db("clinicdb") or die(mysql_error());  echo "Connected to Database";

?>
