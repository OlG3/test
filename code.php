<?php

//затестувати згодом
//function trans($s){
//  $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
//  return $s;
//}
//
//function translit($text){
//  $arr = [];
//  $split = explode("", $text);
//  $arr[] = $split;
//  var_dump($arr);
//}
//var_dump(translit('test'));

/* ТРАНСЛІТЕРАЦІЯ З РОС НА ІНГЛІШ

function translit($textcyr){
$cyr = [
  'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',
  'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',
  'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',
  'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я'
];
$lat = [
  'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
  'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
  'A','B','V','G','D','E','Io','Zh','Z','I','Y','K','L','M','N','O','P',
  'R','S','T','U','F','H','Ts','Ch','Sh','Sht','A','I','Y','e','Yu','Ya'
];
return str_replace($cyr, $lat, $textcyr);
}


echo translit('что тут не то');
*/



/*

function func($numb, $fir, $sec, $third){

  if($num == 1){
    return $numb.' '.$fir;
  }
  else if($numb > 1 AND $numb <= 4){
    return $numb.' '.$sec;
  }
  else{
    return $numb.' '.$third;
  }
}

echo func(-1, 'яблоко', 'яблока', 'яблок');

*/


/* string treem
function cut($string, $numb = 10){
  return substr($string, 0, $numb);
}

echo(cut('string'));
*/



// lucky ticket ?????????

//$arr = [];
//
//function func($numb){
//
//  $arr[] = preg_split('//',$numb, -1, PREG_SPLIT_NO_EMPTY);
//
//  $test = intval($arr);
//
//  var_dump($arr);
//
//  if(($arr[0] + $arr[1] + $arr[2]) == ($arr[3] + $arr[4] + $arr[5])){
//    echo 'Its your lucky ticket';
//  }
//
//}
//
//
//
//func(233333);



//if(isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0){
//  echo 'не отмечен';
//}
//
//if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
//  echo 'отмечен';
//}


//function input($name, $value)
//{
//  if(isset($_REQUEST[$name])) {
//    $value = $_REQUEST[$name];
//  }
//
//  return '<input type="text" name="'.$name.'" value="'.$value.'">';
//}
//
//echo input(Oleg, 25);

//
//if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) {
//  echo 'Прощай '.$_REQUEST['name'];
//}
//
//if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
//  echo 'Привет '.$_REQUEST['name'];
//}
//


   //Languages what you know


/*
if(isset($_POST['html']) or ($_POST['js']) or ($_POST['php']) or ($_POST['ruby']) == 1){

  echo 'You know:<br>';

  if($_POST['html']){
    echo 'html<br>';
  }
  if($_POST['js']){
    echo 'js<br>';
  }
  if($_POST['php']){
    echo 'php<br>';
  }
  if($_POST['ruby']){
    echo 'ruby<br>';
  }
}*/



//

/*

if (isset($_REQUEST['php']) and $_REQUEST['php'] == 0) {
  echo 'Вы не знаете PHP';
}

if (isset($_REQUEST['php']) and $_REQUEST['php'] == 1) {
  echo 'Вы  знаете PHP!';
}
*/





























































?>








































