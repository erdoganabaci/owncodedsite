<?php
session_start();
?>

<!doctype html>
<html lang="en" id="html">
  <head>
    <!-- Requigreen meta tags -->
    <meta charset="utf-8">
    <title>Kişisel Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="description" content="Kişisel Blog Sitesi">
    <meta name="keywords" content="erdogan abacı,kişisel blog,kişisel web sitesi,ders,staj">
    <meta name="author" content="Erdoğan Abacı">
    
    
      
    <!-- Bootstrap CSS -->
    
     <link rel="stylesheet" type="text/css" href="css/main.css" >
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    

  </head>
  <body>

       <div class="modal fade" id="modal1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="header">
                            <button type="button" class="close" data-dismiss="modal">
                             <span>&times;</span></button>
                        <h5 class="modal-title"><i class="fas fa-exclamation-circle" style="color: red"></i>

                           Merhaba!</h5>     
                    </div>

                <div class="modal-body">
                    <span><a href="#">abacim.com</a>'a Hoşgeldiniz!</span>
                </div>
            
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Çık</button>
              </div>  
                </div>

            </div>
        </div>

           <div class="modal fade" id="modalgiz">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="header">
                            <button type="button" class="close" data-dismiss="modal">
                             <span>&times;</span></button>
                        <h5 class="modal-title"><i class="fas fa-user-secret" style="color: blue"></i>

                            Gizlilik!!</h5>     
                    </div>

                <div class="modal-body">
                    Verilerinize kimse erişemez! 
                </div>
            
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Çık</button>
              </div>  
                </div>

            </div>
        </div>
        
        <div class="modal fade" id="modalkosul">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="header">
                            <button type="button" class="close" data-dismiss="modal">
                             <span>&times;</span></button>
                        <h5 class="modal-title"><i class="far fa-question-circle" style="color: gray"></i>

                            Koşullar!!</h5>     
                    </div>

                <div class="modal-body">
                          İzin alınmadan içerik kopyalanması yasaktır! 
                </div>
            
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Çık</button>
              </div>  
                </div>

            </div>
        </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
      <div class="container">
     
          <a class="navbar-brand" href="index.php">Kişisel Blog</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuac" >
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="menuac">
                <form class="form-inline" id="sign_form" type="post" name="reg_from">
                        <input type="email" name="sign_email" class="form-control  mr-2" id="sign_email"  placeholder="Mail Adresi.." >
                        <input type="password" name="sign_pass" class="form-control mr-2" id="sign_pass" placeholder="Şifre..">
                        <input type="button" class="btn btn-success my-3" id="sign_buton" value="Giriş">
                        <div id="sign_success" class="bg-danger text-success ml-auto reg_kayit" >
                                    

                            </div>
                            <div id="sign_kayitfail" class="bg-warning text-success ml-auto reg_kayit" >
                                    Form Alanlarını Boş Bırakamazsın!
                        </div>
                    </form>
                    
            <ul class="navbar-nav ml-auto " >
              <li class="nav-item active">
                <a href="index.php" class="nav-link"><i class="fas fa-home"></i>Anasayfa </a>
              </li>
              <li class="nav-item">
                  <a href="#calisma" class="nav-link" id="bilgiler">Bilgilerim</a>
              </li>
              <li class="nav-item">
                  <a href="#calisma" class="nav-link">Çalışmalarım</a>
              </li>
              <li class="nav-item">
                  <a href="#hakkımda" class="nav-link">Hakkımda</a>
              </li>
              <li class="nav-item">
                  <a href="iletisim.html" class="nav-link">İletişim</a>
              </li>
              <li class="nav-item">
                    <a href="#" class="nav-link">//
                    <?php
        
        if(isset($_SESSION['message'])){
           
            echo 'Sn'.'<font color="white";text-muted>'.$_SESSION['message'].'</font>';
            unset($_SESSION['message']);
        }
        
        ?>

                    </a>
                </li>
            </ul>
          </div>
      </div>
  
    </nav>
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/code-4.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Yazılım</h3>
              <p>Software Development</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/code-1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Web Tasarım</h3>
              <p>Görsel Zevk</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/code-2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Eğlence</h3>
              <p>Eğlencenin Adresi</p>
            </div>
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
    </header>

        <div class="container">
             
            
          <div class="row mt-4" id="calisma">
            <div class="col-md-8">
              <h1  style="margin-top: 100px; text-color:white;" class="text text-success">Yaptığım Çalışmalar</h1>
              <hr class="bg-success">
              <div class="card mb-4" id="calisma" > <!-- class="img-fluid" engeller resim taşmasını-->
                <img width="100" class="card-img-top img-fluid" src="img/kayıt.jpg" alt="makale,kişisel,blog,resim,kullanıcıgirisi,giriş ">
                <div class="card-body">
                    <h2 class="card-title">Kullanıcı Projem</h2>
                    <p class="card-text">Kullanıcı giriş çıkışını database kaydeden back-end arayüzümle interactive çalışan login sayfası...</p>
                      <a href="first-page1.html" id="info1" class="btn btn-warning">Devamını Oku<i class="fas fa-chevron-right" style="color:green;"></i>

                      </a>
                  </div>
                  <div class="card-footer text-muted">
                        <span>Yayınlanma Tarihi: 07/25/2018</span>
                  </div>

              </div>
              <div class="card mb-4"  id="calisma">
                  <img width="100" class="card-img-top" src="img/bilgilerim.jpg" alt="makale,kişisel blog resim">
                  <div class="card-body">
                      <h2 class="card-title">Bilgilerim</h2>
                      <p class="card-text"><small style="text-size:15px;" class="card-text lead">Bildiğim diller: </small>Html,css,javascript,jquery,php,ajax ve c,java,kotlin programlama dilleridir.Ve ayrıca...</p>
                        <a href="first-page2.html" class="btn btn-warning">Devamını Oku<i class="fas fa-chevron-right" style="color:green;"></i>
  
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                          <span>Yayınlanma Tarihi: 07/25/2018</span>
                    </div>
  
                </div>
                <div class="card mb-4" id="hakkımda" >
                    <img width="100" class="card-img-top" src="img/hakkımda.jpg" alt="makale,kişisel blog resim">
                    <div class="card-body">
                        <h2 class="card-title">Hakkımdakiler</h2>
                        <p class="card-text">2015 yılında İzmir Kız Lisesi'nden mezun oldum.Celal Bayar Üniversitesi'nde 3.sınıfa geçti.Bu siteyi stajda öğrendiklerimle yaptım.Hayallerimi koda dökmeyi...</p>
                          <a href="first-page3.html" class="btn btn-warning">Devamını Oku<i class="fas fa-chevron-right" style="color:green;"></i>
    
                          </a>
                      </div>
                      <div class="card-footer text-muted">
                            <span>Yayınlanma Tarihi: 07/25/2018</span>
                      </div>
                    
                  </div>
                  <br><br><br><br><br>
                  
            </div>
           
           
            <div class="col-md-4">
                <br><br><br><br><br>
                <div class="card my-5">
                      <h6 class="card-header bg-success text-white">Arama Kutusu</h6>
                  <div class="card-body">
                      <div class="input-group">  
                    <input type="text" class="form-control" placeholder="Metin giriniz.." name="">
                      <span><button class="btn btn-secondary" type="button">Ara</button></span>
                     </div>
                  </div>

                </div>
                <div class="card mt-4">
                    <h6 class="card-header bg-success text-white">Site Yapımında Kullanılan Diller</h6>
                <div class="card-body">
                  <div class="row"> <!--divleri istediğim gibi böler -->
                    <div class="col-md-6">
                        <ul class="list-unstyled"> <!-- altı çizili engeller yandaki liste noktaları kaldırır -->
                          <li><a href="https://jquery.com/"><i class="fas fa-home" style="color:green;"></i>Jquery</a></li>
                          <li><a href="https://www.javascript.com/"><i class="fab fa-js" style="color:blue;"></i>Javascript</a></li>
                          <li><a href="http://php.net"><i class="fab fa-php" style="color:green; "></i>Php</a></li>
                          <li><a href="http://api.jquery.com/jquery.ajax/"><i class="fas fa-home" style="color:green;"></i>Ajax</a></li>
                          
                        </ul>
    
                    </div>
                    <div class="col-md-6 ">
                        <ul class="list-unstyled"> <!-- altı çizili engeller yandaki liste noktaları kaldırır -->
                          <li><a href="https://www.w3schools.com/css/"><i class="fab fa-css3-alt" style="color:green;"></i>Css</a></li>
                          <li><a href="https://getbootstrap.com/"><i class="fas fa-home" style="color:green;"></i>Bootstrap</a></li>
                          <li><a href="https://www.w3schools.com/html/html5_intro.asp"><i class="fab fa-html5" style="color:orange;"></i>Html</a></li>
                          <li><a href="https://www.mysql.com/"><i class="fas fa-syringe" style="color:black;"></i>Mysql</a></li>
                        </ul>
    
                    </div>
                  </div>
                    

                </div>

              </div>
              <div class="card my-5">
                  <h6 class="card-header bg-success text-white">Reklam Alanı</h6>
              <div class="card-body">
                  <img class="img-fluid"src="http://via.placeholder.com/700x300" alt="">

              </div>

            </div>

              
            </div>

            </div>
              <footer>
                  
                  <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-bottom">
                        
                      <div class="container">
                          <a class="navbar-brand mb-2" href="#"  >Kayıt</a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#altmenuac" >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                          <div class="collapse navbar-collapse" id="altmenuac">
                        <form class="form-inline" id="reg_form" type="post" name="reg_from">
                          <input type="email" name="reg_email" class="form-control  mr-2" id="reg_email"  placeholder="Mail Adresi.." >
                          <input type="text" name="reg_adsoyad" class="form-control mr-2" id="reg_adsoyad" placeholder="Ad ve Soyad..">
                          <input type="password" name="reg_pass" class="form-control mr-2 " id="reg_pass" placeholder="Şifre..">
                          <input type="password" name="regagain_pass" class="form-control  mr-2" id="regagain_pass" placeholder="Şifre Tekrarı..">
                          <input type="hidden" name="secret" id="" value="true">
                          <input type="button" class="btn btn-success my-3" id="reg_buton" value="Kaydet">
                          
                          <div id="reg_kayitfail" class="bg-warning text-success ml-auto reg_kayit" >
                                Form Alanlarını Boş Bırakamazsın!
                            </div>

                          <div id="reg_kayit" class="bg-danger text-success ml-auto reg_kayit" >
                                    

                          </div>
                        </form>
                        


                            <ul class="navbar-nav ml-auto" >
                              
                              <li class="nav-item">
                                  <a href="#" class="nav-link" id="gizli">Gizlilik</a>
                              </li>
                              <li class="nav-item">
                                  <a href="#" class="nav-link" id="kosul">Koşullar</a>
                              </li>
                              
                             
                            </ul>
                           
                          </div>
                           
                      </div>
                      <ul class="navbar-nav mr-auto" ><li class="nav-item">
                                  <a href="index.php" class="nav-link" id="kosul"> ©2018 Erdogan Abaci - Yazılım,Web Tasarım,Bilişimin Adresi...</a>
                              </li></ul>
                    </nav>


              </footer>


          </div>

    <script src="js/jquery-1.11.3.js" ></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>