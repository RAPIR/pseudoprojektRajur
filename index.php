<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : 'mahtu kahtu';

require "$page.php";
?>

</body>
</html>

