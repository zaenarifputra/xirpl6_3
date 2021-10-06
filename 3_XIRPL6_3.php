<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
<?php
$array1 = array(0=>'1');
$array2 = array(1=>'apajaja');
$array3 = array(2=>'3.14');
$array4 = array_merge($array1, $array2, $array3);
print_r($array4);
?>
</body>
</html>
