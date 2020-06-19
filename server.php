
<?php
   
   $dbhost = "localhost";
   $dbuser = "dbusername";
   $dbpass = "dbpassword";
   $dbname = "dbname";
   
   //Connect to MySQL Server
   mysql_connect($dbhost, $dbuser, $dbpass);
   
   //Select Database
   mysql_select_db($dbname) or die(mysql_error());
   
   $p1 = $_POST['p1'];
   $p2 = $_POST['p2'];
   $p3 = $_POST['p3'];
   
   $p1 = mysql_real_escape_string($p1);
   $p2 = mysql_real_escape_string($p2);
   $p3 = mysql_real_escape_string($p3);
   
   //build query
   $query = "SELECT * FROM database WHERE p1 = '$p1'";
   
   $qry_result = mysql_query($query) or die(mysql_error());
   
      // Insert a new row in the table for each person returned
   while($row = mysql_fetch_array($qry_result)) {
     echo $row[p1];
   }
?>
