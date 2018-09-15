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
    if(isset($_POST['keyword'])){
        
        $url="http://www.mobil88.astra.co.id/cari_mobil?keyword=".$_POST['keyword']."";
        $ch = curl_init();

        //Jika POST
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);

        $dom = new DOMDocument();
        $dom->loadHTML($output);
        //echo $output;
        $xpath = new DOMXPath($dom);
        $results = $xpath->query('//div[@class="cars grid-3"]/div[@class="inline hoverable"]');

        //mobilbekas
        $url2="https://www.mobilbekas.co.id/harga-bekas/a-".$_POST['keyword']."/";
        $ch2 = curl_init();

        //Jika POST
        curl_setopt($ch2, CURLOPT_URL, $url2);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        $output2 = curl_exec($ch2);
        curl_close($ch2);

        $dom2 = new DOMDocument();
        $dom2->loadHTML($output2);
        //echo $output;
        $xpath2 = new DOMXPath($dom2);
        $results2 = $xpath2->query('//div[@class="search-content"]/div/div[@class="listing-block"]/a[@class="listing-url  "]/div[@class="listing-content"]');

        $results2L = $xpath2->query('//div[@class="search-content"]/div/div[@class="listing-block"]');


        //mobilwow
        $url="http://www.mobil88.astra.co.id/cari_mobil?keyword=".$_POST['keyword']."";
        $ch = curl_init();

        //Jika POST
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);

        $dom = new DOMDocument();
        $dom->loadHTML($output);
        //echo $output;
        $xpath = new DOMXPath($dom);
        $results = $xpath->query('//div[@class="cars grid-3"]/div[@class="inline hoverable"]');
        
        
    }
    
  ?>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index2.php">Mobil Bekas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <form class="form-inline" method="post" action="">
              <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search">
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

          <h2>Mobil 88</h2>
          <div class="row">
          <?php foreach ($results as $result) { ?>
            
            
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                
                  <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $result->childNodes[3]->nodeValue."<br/><br/>"; ?></a>
                    
                  </h4>
                  <h5><?php echo $result->childNodes[5]->nodeValue."<br/><br/>";?></h5>
                  <p class="card-text"></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
            <?php } ?>

          </div>

          <h2>Mobil Bekas</h2>
          <div class="row">
            <?php foreach ($results2L as $result2L) { ?>
            <?php foreach ($results2 as $result2) { ?>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="<?php echo $result2L->childNodes[1]->attributes['href']->nodeValue; ?>"><?php echo $result2->childNodes[1]->nodeValue."<br/><br/>";?></a>
                  </h4>
                  <h5><?php echo $result2->childNodes[3]->nodeValue."<br/><br/>";?></h5>
                  <p class="card-text"></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php } ?>
            

          </div>

          <h2>MobilWow</h2>
          <div class="row">

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Six</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>


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
