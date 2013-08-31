<?php
/*
 // Database Variables (edit with your own server information)
 $server = 'localhost';
 $user = 'buildthe_nobp';
 $pass = '123456';
 $db = 'buildthe_nobpcorp';
 */
 // Database Arming
 $server = 'localhost';
 $user = 'iming';
 $pass = 'iming';
 $db = ' buildthedot_10nobpcorp';
 
 
 // Connect to Database
 $connection = mysql_connect($server, $user, $pass) 
 or die ("Could not connect to server ... \n" . mysql_error ());
 mysql_select_db($db) 
 or die ("Could not connect to database ... \n" . mysql_error ());
 
?>
