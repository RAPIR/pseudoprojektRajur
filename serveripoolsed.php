<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="?" method="post">
    <label for="kass">Sfinks:</label>
    <input type="text" id="kass" name="kass">
    <input type="submit" value="Submit">
</form>

<?php

if(isset($_POST['kass'])) {
        echo 'Kass oli: ' . $_POST['kass'] . '.';
    }
?>

</body>
</html>