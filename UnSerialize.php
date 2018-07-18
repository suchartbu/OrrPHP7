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
        $serialize_obj = file_get_contents('serialize_obj');
        $obj = unserialize($serialize_obj);
        var_dump($obj);
        echo "Testing  " . $obj->name . "Source Value : " . $obj->value;
        ?>
    </body>
</html>
