<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        $x = 0;
        $arr = array(0,4,7);
//        echo $arr[2];

        $arr_1 = array("Hi" => "Привет", "Nautilus" => "Nemo");
//        echo $arr_1["Hi"];

    foreach($arr_1 as $key => $val)
    {
        echo $key . ' ' .$val . '<br>';
    }
    ?>
    
</body>
</html>