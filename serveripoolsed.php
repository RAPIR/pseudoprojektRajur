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
    $eesnimi_algab_vokaaliga = false;

echo $isik->first . " " . $isik->last . " (" . $isik->age . ", " . $isik->sugu . ")";

?>

</body>
</html>