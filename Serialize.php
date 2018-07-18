<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('libs/Obj.php');
        $obj = new Obj();
        $obj->name = "Serialize Object";
        $obj->value = random_int(0, 999);
        echo "Testing  " . $obj->name . "Source Value : " . $obj->value;
        $serialize_obj = serialize($obj);
        file_put_contents('serialize_obj', $serialize_obj);
        ?>
    </body>
</html>
