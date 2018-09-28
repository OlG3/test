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


$numb = [1,2,3,4,5,6];

function func(){
  return end($numb);
}

echo func();