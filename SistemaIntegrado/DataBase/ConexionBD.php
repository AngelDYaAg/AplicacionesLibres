<?php
  $server = 'bzdlckqanxfpcrbx0r5t-mysql.services.clever-cloud.com';
  $username = 'ultfv0qomgimizs5';
  $password = 'P6ZdnnwIf1QxKzPRSbmP';
  $database = 'bzdlckqanxfpcrbx0r5t';
  try 
  {
    $conexion = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  } catch (PDOException $e)
  {
    die('Conexión fallida con la base de datos <br>Error:<br>' . $e->getmessage());
  }

  try 
  {
    $conexion1 = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  } catch (PDOException $e)
  {
    die('Conexión fallida con la base de datos <br>Error:<br>' . $e->getmessage());
  }
?>




