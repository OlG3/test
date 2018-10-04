<?php
//require_once 'database.php';
/*
//set connection to bd
$con = mysqli_connect('localhost', 'root', 'root', 'learn');

//Set russian coding
mysqli_set_charset($con, 'utf8');

// Check connection
if (mysqli_connect_errno()) {
  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}

// query
//$query = "SELECT * FROM user";
$query = "SELECT * FROM user WHERE `name`='Сергей' AND `age`='66'";

// query result
$result = mysqli_query($con, $query);

// how many rows returned
$count = mysqli_num_rows($result);

//my arr
$myArr = [];

if($count) {
  $index = 0;
  while ($row = mysqli_fetch_array($result)) {
    echo '<h1>';
    echo $row['id'];
    echo '</h1>';
  }
}
*/

///////////////////////////////////////////////////////////

//set connection to bd
$con = mysqli_connect('localhost', 'root', 'root', 'learn');

//Set russian coding
mysqli_set_charset($con, 'utf8');

// Check connection
if(mysqli_connect_errno()) {
  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}

// query
//$query = "INSERT INTO news VALUES (NULL, 'Some header', 'abc content', 'full content', '2', '2', CURRENT_TIMESTAMP , '2', '1', '1');";
//$query = "INSERT INT news_category VALUES (NULL, 'value111','desc111',1,1);";
//$query = "INSERT INTO news_category(name, description) VALUES('name1','desc1'), ('name2','desc2');";
//$query = "DELETE FROM user WHERE `id`=16;";

//$query = "INSERT INTO user SET name='Джон', age=20";
//$query = "INSERT INTO user (name, age) VALUES ('Катя', 20), ('Юля', 25), ('Женя', 30)";


$query = "SELECT * FROM user";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);


// Удаление по id (до получения!):
if (isset($_GET['del'])) {
  $del = $_GET['del'];
  $query = "DELETE FROM user WHERE id=$del";
  mysqli_query($con, $query) or die(mysqli_error($con));
}


$result = '';

foreach ($data as $elem) {
  $result .= '<tr>';

  $result .= '<td>' . $elem['id'] . '</td>';
  $result .= '<td>' . $elem['name'] . '</td>';
  $result .= '<td>' . $elem['age'] . '</td>';
  $result .= '<td><a href="?del=' . $elem['id'] . '">удалить</a></td>';


  $result .= '</tr>';
}




























// send and return result of query
$info = mysqli_query($con, $query);

// state of result(true or false)
echo 'Result of INSERT: '.(boolval($info) ? 'true' : 'false');









