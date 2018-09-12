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
    ini_set('display_errors', 'off');
    if(isset($_POST['keyword'])){
        $url="https://www.els.co.id/?category=&s=".$_POST['keyword']."&search_posttype=product&search_sku=1";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        $output = curl_exec($ch);
        curl_close($ch);

        $dom = new DOMDocument();
        $dom->loadHTML($output);
        //echo $output;
        $xpath = new DOMXPath($dom);
        $results = $xpath->query('//ul[@id="loop-products"]/li/div/div/div[@class="item-content"]');


        echo"<h3>Hasil pencarian untuk kata '".$_POST['keyword']."'</h3>";
        foreach($results as $result){
            echo $result->childNodes[1]->nodeValue."-".$result->childNodes[9]->nodeValue."<br/>";
        }
    }
    
?>