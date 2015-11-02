<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
$eesnimi_algab_vokaaliga = false;
$vocals=array('a','e','i','o','u','õ','ä','ö','ü');
$isik=array('first'=>'Rajur ', 'last'=>'Hint ', 'age'=>'(26)'
);

foreach($isik as $key=>$val){
    echo $val;
};
echo '<br><br>';

for($i = 0; $i<=count(@explode(',',$vocals));$i++){
    if(substr(strtoUpper($isik['first']),0,1) == $vocals[$i]){
        echo  'Nimi algab vokaaliga.';
    }

    else{
        echo   'Nimi ei alga vokaaliga.';
    };
};
?>

</body>
</html>