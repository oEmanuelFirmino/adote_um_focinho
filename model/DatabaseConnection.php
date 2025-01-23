<?php

class DatabaseConnection
{
  public static function connect()
  {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "adote";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
  }
}