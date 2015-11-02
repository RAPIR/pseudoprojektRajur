<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h6>
    <?php

    $isik = array(

        'first' => 'Rajur',
        'last' => 'Hint',
        'age' => '(26)');

    foreach($isik as $key=> $val){
        echo $val."<br>";
    }



    ?>
</h6>
</body>
</html>