<!DOCTYPE html>
<html>
<head>
	<title>Mobil88</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="keyword"/>
		<input type="submit" name="cari" value="SEARCH" />
	</form>

<?php 
	ini_set('display_errors', 'off');
	if(isset($_POST['keyword'])){
		$url = "http://www.mobil88.astra.co.id/cari_mobil?keyword=".$_POST['keyword']."";
		$ch = curl_init();

		//Jika POST
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($ch);
		curl_close($ch);
		

		/* //JIKA PAKAI COOKIE
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Cookie: test=cookie"));
		curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile);
        */

		$dom = NEW DOMDocument();
		$dom -> loadHTML($output);
		$xpath = NEW DOMXPath($dom);
		$results = $xpath->query('//div[@class="cars grid-3"]/div[@class="inline hoverable"]');

		echo "<h3>Hasil Pencarian untuk kata '".$_POST['keyword']."'</h3>";
		foreach ($results as $result) {
			echo $result -> childNodes[3] -> nodeValue."Harga: ".$result ->childNodes[5] -> nodeValue."<br/><br/>";
			// echo $result -> nodeValue."<br/><br/>";

		}
	}

 ?>

</body>
</html>
