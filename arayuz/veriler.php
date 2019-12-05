<?php
    include "config1.php";
    $sql="SELECT * FROM user ";
    $sorgu=mysqli_query($url,$sql);
   
?>

<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
    <style type="text/css">
		#basarili-islem {

			display: none;
		}

		

	</style>
  </head>
  <body>
            

        <div class="container">
       <div> <h1 class="col-md-10 ml-4 text-danger pt-4" align="center" >Kullanıcı Kayıt</h1></div>
      
        
        <div id="listele">
        <div id="basarili-islem" class="alert alert-success">
					
				</div>

        <table class="table table-striped ">
            <thead> 
            <tr>
                <th>ID</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th></th>
                <th></th>
            </tr>

            </thead>
            <tbody>
            <?php
              
                while($sonuc=mysqli_fetch_array($sorgu)){
                echo'<tr>
                    <td>'.$sonuc["id"].'</td>
                    <td>'.$sonuc["ad"].'</td>
                    <td>'.$sonuc["soyad"].'</td>
                    <td><button id='.$sonuc["id"].' class="btn btn-primary btn-sm duzenledim">Düzenle</button></td>
                    <td><button id='.$sonuc["id"].'  class="btn btn-danger btn-sm sildi">Sil</button></td>
                </tr>';
        }
        ?>
            </tbody>
        </table>    
        </div>
        </div>







    
    
    <script src="js1/popper.js"></script>
    <script src="js1/bootstrap.min.js"></script>
  </body>
</html>