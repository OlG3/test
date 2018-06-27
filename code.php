<?php
//echo '<pre>';
//
//print_r($_POST);
//
//echo '<pre>';

try {

    if(/*empty($_POST['numb']) == false &&*/ is_numeric($_POST['numb'])) {

        $numb = $_POST['numb'];

        if ($numb > 0) {
            echo('The number more than 0');
        } else if ($numb < 0) {
            echo('The number less than 0');
        } else if ($numb == 0) {
            echo('The number equal zero');
        } else {
            throw new Exception('Єто не число');
        }
    }
}catch (Exception $e){
    echo 'No datainfo', $e->getMessage();
}
