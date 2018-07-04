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
$result = [];

if(!empty($_POST['submit_diget'] == 'Submit')){ // перевірка на встановлення значення

    for ($i = $_POST['first_numb']+1; $i < $_POST['second_numb']; $i++){
        if($i % 2 == 0){
            $result[] = $i;
        }
    }
    $count = count($result);
}
echo $count;



//echo "<pre>";
//print_r($result);
//echo "</pre>";





