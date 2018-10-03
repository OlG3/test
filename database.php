<?php

// PDO EXAMPLE // PDO EXAMPLE// PDO EXAMPLE// PDO EXAMPLE// PDO EXAMPLE// PDO EXAMPLE



//function myException( $e )
//{
//  //log
//  exit( '111111111' );
//}

//set_exception_handler( 'myException' );

try
{
  $pdo = new PDO(
    'mysql:host=localhost;dbname=learn',
    'root',
    'root',
    [
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8', time_zone = '+00:00'",
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );

  $pdo -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  //  $pdo -> setAttribute( PDO::ATTR_CASE, PDO::CASE_UPPER );
}
catch ( PDOException $e )
{
  exit( 'Подключение не удалось: ' . $e -> getMessage() );
}

//2
//$sql = "SELECT * FROM `blog`";
//$result = $pdo -> query( $sql );
//
//if ( $result -> rowCount() )
//{
//  $arr = [];
//
//  while ( $row = $result -> fetch(  ) )
//    $arr[] = $row;
//
//  $arr = $result -> fetchAll(  );
//  echo '<pre>';
//  print_r( $arr );
//  echo '</pre>';
//}
//else
//  echo 'No data';

//$id  = "12211212'4324";
//$id2 = 13;

//$stm = $pdo -> prepare( 'SELECT * FROM `blog` WHERE `id` = ? OR `id` = ?' );
//$stm -> execute( [$id, $id2] );
//
//$all = $stm -> fetchAll(  );
//echo '<pre>';
//print_r( $all );
//echo '</pre>';


//$stm = $pdo -> prepare( "SELECT * FROM `blog` WHERE `id` = :id OR `id` = :id2 " );
//$stm -> execute( ['id2' => 13, 'id' => 12] );
//
//$all = $stm -> fetchAll(  );
//echo '<pre>';
//print_r( $all );
//echo '</pre>';


//$limit = 2;
//$start = 1;
//$stm = $pdo -> prepare( "SELECT * FROM `blog` LIMIT :start, :limit" );
//
//$stm -> bindValue( 'start', $start, PDO::PARAM_INT );
//$stm -> bindValue( 'limit', $limit, PDO::PARAM_INT );
//
//$stm -> execute(  );
//
//$all = $stm -> fetchAll(  );
//echo '<pre>';
//print_r( $all );
//echo '</pre>';


//$pdo -> exec( "UPDATE `blog` SET `title` = 'aaaaaaaaaaa' WHERE `id` = 11 " );
//
//$pdo -> beginTransaction();
//
//$stm = $pdo -> exec( "UPDATE `blog` SET `title` = '" . time(  ) . "' WHERE `id` = 5" );
//
//echo time(  );
//echo '<hr />';
//echo $rand = rand( 0, 1 );
//
//if ( $rand )
//  $pdo -> commit();
//else
//  $pdo -> rollBack( );*/