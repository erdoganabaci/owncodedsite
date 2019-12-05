<?php 
require_once "config1.php"; 



?>



<!DOCTYPE html>
<html>
<html lang="tr">
<head>

	<meta charset="utf-8">
	<title>Login Page</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style type="text/css">
		
		#kayit-ekle {

			display: none;
		}

		#kayit-duzenle {

			display: none;
		}

		#bos-alan {

			display: none;
		}

		#basari-islem {

			display: none;
		}

		#basari-islem-duzenle {

			display: none;
		}

	</style>
	

	<body>

		<div class="container">
			
		
			<div align="right">
				<button id="yeni-ekle" class="btn btn-success mb-4">Yeni Ekle</button>
				<a  class="btn btn-danger mb-4 "  href="../index.php">Geri Dön<i class="fas fa-chevron-right" style="color:green;"></i></a>
			

			</div>
			
			<div id="listele"></div>

			<div id="kayit-ekle">

				<h3>Kayıt Ekleme</h3>
				<hr>

				<div id="bos-alan" class="alert alert-danger">
					Form Alanlarını Boş Bırakamazsınız
				</div>

				<div id="basari-islem" class="alert alert-success">
					
				</div>


				<form method="post" id="jquery-ekle">
					
					<div class="form-group">
						<label>Adınız</label>
						<input type="text" class="form-control" id="ad_ekle" name="ad_ekle" placeholder="Adınızı Girin...">
					</div>

					<div class="form-group">
						<label>Soyadınız</label>
						<input type="text" class="form-control" id="soyad_ekle" name="soyad_ekle" placeholder="Soyadınızı Girin...">
					</div>
					<input type="hidden" name="bilgiekle" id="bilgiekle">

					<button type="button" id="gonder" class="btn btn-primary">Kayıt Ekle</button>
					<button type="button" id="geridon" class="btn btn-warning">Geri Dön</button>

				</form>
				

			</div>


			<div id="kayit-duzenle">




				<h3>Kayıt Düzenleme</h3>
				<hr>

				<div id="bos-alan" class="alert alert-danger">
					Form Alanlarını Boş Bırakamazsınız
				</div>

				<div id="basari-islem-duzenle" class="alert alert-success">
					
				</div>


				<form method="post" id="jquery-duzenle" >
					
					<div class="form-group">
						<label>Adınız</label>
						<input type="text" class="form-control" id="ad_duzenle" name="ad_duzenle" value="">
					</div>

					<div class="form-group">
						<label>Soyadınız</label>
						<input type="text" class="form-control" id="soyad_duzenle" name="soyad_duzenle" value="">
					</div>
					<input type="hidden" name="bilgiduzenle">
					<input type="hidden" id="bilgiduzenle_id" name="bilgiduzenle_id" value="">

					<button type="button" id="guncelle" class="btn btn-primary">Kaydet</button>
					<button type="button" id="geridondum" class="btn btn-warning">Geri Dön</button>

				</form>
				

			
				




			</div>

		</div>



		



		<!-- JQuery Projeye dahil etme -->
		<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
		<script type="text/javascript" src="js/ozel.js"></script>


		<script src="js1/popper.js"></script>
   		 <script src="js1/bootstrap.min.js"></script>



	</body>
	</html>