<?php
//echo '<pre>';
//
//print_r($_POST);
//
//echo '<pre>';


//Введене число більше чи менше нуля
//    if(/*empty($_POST['numb']) == false &&*/ is_numeric($_POST['numb'])) {
//
//        $numb = $_POST['numb'];
//
//        if ($numb > 0) {
//            echo('The number more than 0');
//        } else if ($numb < 0) {
//            echo('The number less than 0');
//        } else if ($numb == 0) {
//            echo('The number equal zero');
//        } else {
//            echo('This is not a number');
//
//        }
//    }

// рахує кількість слів в реченні. Не працює для кирилиці.
//$var = $_POST['numb'];
//
//$counts = str_word_count($var);
//
//echo($counts);
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
//die('1');
//$var1 = $_POST['first_numb'];


// рахує кількість парних чисел в проміжку між введеними числами
//$result = [];
//
//if(!empty($_POST['submit_diget'] == 'Submit')){ // перевірка на встановлення значення
//
//    for ($i = $_POST['first_numb']+1; $i < $_POST['second_numb']; $i++){
//        if($i % 2 == 0){
//            $result[] = $i;
//        }
//    }
//    $count = count($result);
//}
//echo $count;



//виводить найменше число по типу 635981 - рез. = 1, але

//$var = $_POST['numb'];
//
//if(!empty($_POST['submit_diget'] == 'Submit')){
//
//    $numbers = preg_split('//', $var, -1, PREG_SPLIT_NO_EMPTY);
//
//    return( trim($numbers)!='');
//
//    echo min($numbers);
//    print_r($numbers);
//}


$ar = $_POST['numb'];

$min = $ar[0];

for ($i = 0; $i < count($ar); $i++){
    if ($min > $ar[$i]) {
        $min = $ar[$i];
    }
}

echo $min;








//echo "<pre>";
//print_r($result);
//echo "</pre>";





