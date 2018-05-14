<?php
  error_reporting(E_ALL);
  ini_set("display errors", TRUE);
  // useful for debugging --- outputs to browser console
  // function console_log( $data ){
  //   echo '<script>';
  //   echo 'console.log('. json_encode( $data ) .')';
  //   echo '</script>';
  // }

  $host = '127.0.0.1:3306';
  $user = 'root';
  $pass = '';

  $databaseName = 'products';
  $tableName = 'productlist';

  // Connects to the database
  $con = mysqli_connect($host,$user,$pass,$databaseName);

  // If the connection fails, these error messages will be displayed.
  if (!$con) {
    echo 'Error: Unable to connect to MySQL.' . PHP_EOL;
    echo 'Debugging error number: ' . mysqli_connect_errno() . PHP_EOL;
    echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
    exit;
  }

  

  // echo json_last_error();

  // // Closes connection to database
  // mysqli_close($con);

?>
