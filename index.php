<!DOCTYPE>
<html>
<head>
    <?php
    include 'code.php';
    require_once 'database.php';
    ?>
</head>
<body>

   <!-- <form action="code.php" method="post" name="number_form">
        <input type="text" name="numb" id="id_numb">
        <input type="submit" name="submit_diget">
    </form>-->
   <table>
       <tr>
           <th>id</th>
           <th>name</th>
           <th>age</th>
           <th>delete</th>
       </tr>
     <?php
        echo $result;
     ?>
   </table>


</body>
</html>




