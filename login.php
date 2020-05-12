<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giriş Yap - Emirhan Şensoy</title>


  </head>
  <body style="background-color:#161616">

    <?php
      if($_POST["kullaniciAdi"] != "g191210040@sakarya.edu.tr" || $_POST["sifre"] != "123")
      {
        header("Location: "."loginYanlis.html");
      }
    ?>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <!-- Toggler button - Sayfa küçüldüğünde navbar link'leri bir butonun icine saklanır. -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar link'leri -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" style="color:white" href="index.html">Hakkımda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:white" href="ozgecmis.html">Özgeçmiş</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:white" href="sehrim.html">Şehrim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:white" href="takimimiz.html">Takımımız</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:white" href="iletisim.html">İletişim</a>
          </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
          <li>
            <a class="nav-link" style="color:#A2A2A2" href="#"><?php echo $_POST["kullaniciAdi"]; ?></a>
          </li>
        </ul>
      </div>
    </nav>

    <br><br><br><br>

    <div class="container" style="margin-top:70px">
      <div class="row rounded-lg" style="color: white; background-color: #353a40;">
        <div class="col-md-4 offset-4">
          <br>
          <br>
        </div>
        <div class="col-md-8 offset-2">
          <center>
            <h3>Hoşgeldin <?php echo $_POST["kullaniciAdi"]; ?></h2>
            <br>
            <br>
          </center>
          <p>Kullanıcı Adınız : <?php echo $_POST["kullaniciAdi"]; ?></p>
          <p>Şifreniz : <?php echo $_POST["sifre"]; ?></p>
        </div>
        <div class="col-md-4 offset-4">
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>

      </div>
    </div>


    <br><br><br><br><br><br><br><br><br><br><br>


    <div class="jumbotron jumbotron-fluid text-center" style="margin-bottom:0; background-color:#353a40; color:black">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <a href="https://www.facebook.com/emirhan.sensoy56/"><img src="img/face1.png" alt="Facebook" width="80" height="80" style="margin-left:75px"></a>
          </div>
          <div class="col-md-2">
            <a href="https://www.instagram.com/emirhn.sensoy/"><img src="img/insta1.png" alt="Instagram" width="70" height="70" style="margin-left:75px"></a>
          </div>
          <div class="col-md-2">
            <a href="https://github.com/rytheen"><img src="img/github1.png" alt="Github" width="70" height="70" style="margin-left:75px"></a>
          </div>
          <div class="col-md-2">
            <img src="img/mail.png" alt="E-mail" width="60" height="60" style="margin-left:75px">
          </div>
          <div class="col-md-2" style="margin-left:-15px; margin-top:6px">
            <p>emirhansensoy56@hotmail.com<br>emirhan.sensoy@ogr.sakarya.edu.tr</p>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

  </body>
</html>
