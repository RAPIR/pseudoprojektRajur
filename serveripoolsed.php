<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$isik = (object)array("first" => "Rajur", "last" => "Hint", "age" => 26);
$isik->sugu = "mees";
function first_start($other)
{
    if (in_array($other[0], ["a", "e", "i", "o", "u", "õ", "ä", "ö", "ü"])) {
        return true;
    } else {
        return false;
    }
}
;
$eesnimi_algab_vokaaliga = first_start($isik->first);

echo $isik->first . " " . $isik->last . " (" . $isik->age . ", " . $isik->sugu . ")";

if ($eesnimi_algab_vokaaliga) {
    echo "Nimi algab vokaaliga";
}
else{
    echo   'Nimi ei alga vokaaliga.';
};


?>

</body>
</html>