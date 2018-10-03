<?php
require_once 'database.php';


$table = '';

$sql = "SELECT * FROM `workers` WHERE `id` != 2";

$stm = $pdo -> prepare( $sql );

//echo '<pre>';
//print_r( $stm );
//echo '</pre>';

//die('1');

$stm -> execute(  );

$all = $stm -> fetchAll(  );

foreach ($all as $row){
  $table .= "<tr>";
  $table .= "<td>".$row['id']."</td>";
  $table .= "<td>".$row['name']."</td>";
  $table .= "<td>".$row['age']."</td>";
  $table .= "<td>".$row['salary']."</td>";

  $table .= "</tr>";
}
//echo '<pre>';
//print_r( $all );
//echo '</pre>';





?>










