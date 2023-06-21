<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>duplicate values in array</title>
</head>

<body>
    <?php
    $arr = array(
        "a" => "red",
        "b" => "green",
        "c" => "red",
        "d" => "green"
    );
    $duplicate = array_diff_assoc($arr, array_unique($arr));
    echo "Original array is ";
    echo '<br>';
    foreach ($arr as $key => $value) {
        echo $key . '=>' . $value . "<br>";
    }
    echo '<br>';
    echo "duplicate array is ";
    echo '<br>';
    foreach ($duplicate as $key => $value) {
        echo $key . '=>' . $value . "<br>";
    }
    ?>
</body>

</html>