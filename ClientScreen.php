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
        $client_ip = $_SERVER['REMOTE_ADDR'];
        $serialize_obj = file_get_contents('serialize_obj');
        $ip_data = unserialize($serialize_obj);
        $HN = "HN_1234";
        if ($client_ip == $ip_data->$HN['client']) {
            echo "Client IP " . $client_ip . " $HN host value is  " . $ip_data->$HN['value'];
        } else {
            echo "Client IP " . $client_ip . " $HN not value sent to you !  ";
        }
        echo "<br>";
        $HN = "HN_4567";
         if ($client_ip == $ip_data->$HN['client']) {
            echo "Client IP " . $client_ip . " $HN host value is  " . $ip_data->$HN['value'];
        } else {
            echo "Client IP " . $client_ip . " $HN not value sent to you !  ";
        }
        ?>
    </body>
</html>
