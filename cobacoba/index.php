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
    //if(isset($_POST['keyword'])){
        $url="https://www.mobilbekas.co.id";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        $output = curl_exec($ch);
        curl_close($ch);
        
        $dom = new DOMDocument();
        $dom->loadHTML($output);
        //echo $output;
        $xpath = new DOMXPath($dom);
        $results = $xpath->query('//img[@class="image-block"]');
        //$results2 = $xpath->query();
        echo"<h3>Hasil pencarian untuk kata '".$_POST['keyword']."'</h3>";
        foreach($results as $result){
            echo $result->childNodes[1]->nodeValue."<br/>";
            //echo $result->childNodes[3]->nodeValue."<br/>";
        }

        $url2="http://www.mobil88.astra.co.id/";
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_URL,$url2);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER,true);
        $output2 = curl_exec($ch2);
        curl_close($ch2);
        
        $dom2 = new DOMDocument();
        $dom2->loadHTML($output2);
        //echo $output;
        $xpath2 = new DOMXPath($dom2);
        $results2 = $xpath2->query('//div[@class="cars grid-4 home"]/div[@class="fake-anchor"][position() < 5]');

        echo"<h3>Hasil pencarian untuk kata '".$_POST['keyword']."'</h3>";
        foreach($results2 as $result2){
            echo $result2->childNodes[3]->nodeValue."<br/>";
        }
    //}
    
?>