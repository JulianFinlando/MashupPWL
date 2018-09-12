<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="keyword"/>
        <input type="submit" value="cari"/>
    </form>
</body>
</html>

<?php
    $url = "https://www.mobil123.com/";
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output;
?>
http://www.mobil88.astra.co.id/
https://www.mobil123.com/
https://www.mobilwow.com/