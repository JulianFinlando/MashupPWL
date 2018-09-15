<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>
  <?php 
  ini_set('display_errors', 'off');
    //hasil dari web mobil88
    $url = "http://www.mobil88.astra.co.id/";
		$ch = curl_init();

		//Jika POST
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($ch);
		curl_close($ch);  
    $dom = NEW DOMDocument();
		$dom -> loadHTML($output);
    $xpath = NEW DOMXPath($dom);

    $resultsMobil881 = $xpath->query('//div[@class="cars grid-4 home"]/div[@class="fake-anchor"][1]');
    $resultsMobil88g1 = $xpath->query('//div[@class="fake-anchor"][1]//img/@src');
    
    $resultsMobil882 = $xpath->query('//div[@class="cars grid-4 home"]/div[@class="fake-anchor"][2]');
    $resultsMobil88g2 = $xpath->query('//div[@class="fake-anchor"][2]//img/@src');

    $resultsMobil883 = $xpath->query('//div[@class="cars grid-4 home"]/div[@class="fake-anchor"][3]');
    $resultsMobil88g3 = $xpath->query('//div[@class="fake-anchor"][3]//img/@src');

    $resultsMobil884 = $xpath->query('//div[@class="cars grid-4 home"]/div[@class="fake-anchor"][4]');
    $resultsMobil88g4 = $xpath->query('//div[@class="fake-anchor"][4]//img/@src');
    
    //hasil dari web mobibekas
    $url2 = "https://www.mobilbekas.co.id/";
		$ch2 = curl_init();
		curl_setopt($ch2, CURLOPT_URL, $url2);
		curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
		$output2 = curl_exec($ch2);
		curl_close($ch);
    $dom2 = NEW DOMDocument();
		$dom2 -> loadHTML($output2);
    $xpath2 = NEW DOMXPath($dom2);

    $resultsMobilBekas = $xpath2->query('//div[@class="listing-content"][1]');
    
    //hasil dari web mobilwow
    $url3 = "https://www.mobilwow.com/mobil-bekas";
		$ch3 = curl_init();
		curl_setopt($ch3, CURLOPT_URL, $url3);
		curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
		$output3 = curl_exec($ch3);
		curl_close($ch);
    $dom3 = NEW DOMDocument();
		$dom3 -> loadHTML($output3);
    $xpath3 = NEW DOMXPath($dom3);

    $resultsMobilWow = $xpath3->query('///div[@class="itemlabel2 carsaleinfo super 73"][1]');  
    $resultsMobilWowg = $xpath3->query('//div[@class="listitem"]/img/@src');
    foreach($resultsMobilWowg as $resultMobilWowg){
      //echo $resultMobilWowg->nodeValue;
    }
    
?>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Mobil Bekas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <form class="form-inline" action="/action_page.php">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">


        <div class="col-lg-12">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel" align="center">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://uploads.haystak.com/seo/responsive_model_pages/Used/Kia/images/header.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>          

          <h2>Mobil 88</h2>
          <div class="row">
            <?php foreach ($resultsMobil881 as $resultMobil881) { ?>
              <?php foreach($resultsMobil88g1 as $resultMobil88g1){ ?>
            <div class="col-md-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="<?php echo $resultMobil88g1->nodeValue; ?>" alt=""></a>
                  <div class="card-body">
                  <h4 class="card-title">
                  
                    <a href="<?php echo $resultMobil881->childNodes[1]->attributes['href']->nodeValue; ?>"><?php echo $resultMobil881->childNodes[3]->nodeValue."<br/>"; ?></a>
                  </h4>
                  <h5><?php echo $resultMobil881->childNodes[7]->nodeValue."<br/><br/>"; ?></h5>
                  <p class="card-text"><?php echo $resultMobil881->childNodes[5]->nodeValue."<br/><br/>"; ?></p>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php } ?>

            <?php foreach ($resultsMobil882 as $resultMobil882) { ?>
              <?php foreach($resultsMobil88g2 as $resultMobil88g2){ ?>
            <div class="col-md-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="<?php echo $resultMobil88g2->nodeValue; ?>" alt=""></a>
                  <div class="card-body">
                  <h4 class="card-title">
                  
                    <a href="<?php echo $resultMobil882->childNodes[1]->attributes['href']->nodeValue; ?>"><?php echo $resultMobil882->childNodes[3]->nodeValue."<br/>"; ?></a>
                  </h4>
                  <h5><?php echo $resultMobil882->childNodes[7]->nodeValue."<br/><br/>"; ?></h5>
                  <p class="card-text"><?php echo $resultMobil882->childNodes[5]->nodeValue."<br/><br/>"; ?></p>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php } ?>

          

            <?php foreach ($resultsMobil883 as $resultMobil883) { ?>
              <?php foreach($resultsMobil88g3 as $resultMobil88g3){ ?>
            <div class="col-md-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="<?php echo $resultMobil88g3->nodeValue; ?>" alt=""></a>
                  <div class="card-body">
                  <h4 class="card-title">
                  
                    <a href="<?php echo $resultMobil883->childNodes[1]->attributes['href']->nodeValue; ?>"><?php echo $resultMobil883->childNodes[3]->nodeValue."<br/>"; ?></a>
                  </h4>
                  <h5><?php echo $resultMobil883->childNodes[7]->nodeValue."<br/><br/>"; ?></h5>
                  <p class="card-text"><?php echo $resultMobil883->childNodes[5]->nodeValue."<br/><br/>"; ?></p>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php } ?>

          

            <?php foreach ($resultsMobil884 as $resultMobil884) { ?>
              <?php foreach($resultsMobil88g4 as $resultMobil88g4){ ?>
            <div class="col-md-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="<?php echo $resultMobil88g4->nodeValue; ?>" alt=""></a>
                  <div class="card-body">
                  <h4 class="card-title">
                  
                    <a href="<?php echo $resultMobil884->childNodes[1]->attributes['href']->nodeValue; ?>"><?php echo $resultMobil884->childNodes[3]->nodeValue."<br/>"; ?></a>
                  </h4>
                  <h5><?php echo $resultMobil884->childNodes[7]->nodeValue."<br/><br/>"; ?></h5>
                  <p class="card-text"><?php echo $resultMobil884->childNodes[5]->nodeValue."<br/><br/>"; ?></p>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php } ?>
          </div>

          <h2>MobilBekas</h2>
          <div class="row">
          <?php foreach ($resultsMobilBekas as $resultMobilBekas) {  
              ?>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href=""><?php echo $resultMobilBekas->childNodes[1]->nodeValue."<br/>";?> </a>
                  </h4>
                  <h5><?php echo $resultMobilBekas->childNodes[3]->nodeValue."<br/>"; ?></h5>
                  <p class="card-text"><?php echo $resultMobilBekas->childNodes[5]->nodeValue."<br/>"; ?>
                  <?php echo $resultMobilBekas->childNodes[9]->nodeValue."<br/>"; ?></p>
                </div>
              </div>
            </div>
          <?php } ?>
          </div>

          <h2>MobilWow</h2>
          <div class="row">
            <?php foreach($resultsMobilWow as $resultMobilWow) { ?>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card h-100">
                <?php  ?>
                    
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $resultMobilWow->childNodes[1]->nodeValue."<br/>"; ?></a>
                  </h4>
                  <h5><?php echo $resultMobilWow->childNodes[5]->nodeValue."<br/>"; ?></h5>
                  <p class="card-text"><?php echo $resultMobilWow->childNodes[3]->nodeValue."<br/>"; ?></p>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Halo -->

</html>
