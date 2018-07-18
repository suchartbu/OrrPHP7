<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('libs/Obj.php');
        $ip_data = new Obj();
        $ip_data->HN_1234 = [client => '10.1.108.11', value => random_int(0, 9999)];
        $ip_data->HN_4567 = [client => '10.1.108.4', value => random_int(0, 9999)];
        $serialize_obj = serialize($ip_data);
        file_put_contents('serialize_obj', $serialize_obj);
        echo "HN 1234  Testing value is : " . $ip_data->HN_1234['value'] . " Send to  value on IP " . $ip_data->HN_1234['client'] . "<br>";
        echo "HN 4567  Testing value is : " . $ip_data->HN_4567['value'] . " Send to  value on IP " . $ip_data->HN_4567['client'] . "<br>";
        ?>
    </body>
</html>
