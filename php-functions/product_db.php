<?php
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

  $con = mysqli_connect($host,$user,$pass,$databaseName);

  if (!$con) {
    echo 'Error: Unable to connect to MySQL.' . PHP_EOL;
    echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EOL;
    echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
    exit;
  }

  // echo 'Success: A proper connection to MySQL was made! The my_db database is great.' . PHP_EOL;
  // echo 'Host information: ' . mysqli_get_host_info($con) . PHP_EOL;

  $sql = "SELECT * FROM productlist WHERE ProductID=3";
  $query = mysqli_query($con, $sql) or die(nl2br("\n Failed to execute query"));

  $rows = array();
  while($r = mysqli_fetch_assoc($query)) {
      $rows[] = $r;
  }
  header('Content-Type: application/json');
  echo json_encode($rows, JSON_PRETTY_PRINT);

  mysqli_close($con);

?>
