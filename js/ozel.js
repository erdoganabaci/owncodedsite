
$(document).ready(function() {

	//Veriler Sayfa Yüklendiği Gibi Çekiliyor
	$("#listele").load("veriler.php");

	$("#yeni-ekle").click(function(){

	
		$("#listele").fadeOut();
		$("#kayit-ekle").fadeIn();
		

	});


	$("#duzenleme-islemi").click(function(){


		$("#listele").fadeOut(500);
		$("#kayit-duzenle").fadeIn(2000);


	});

	$("#gonder").click(function(){


		if ($("#ad_ekle").val()=="" || $("#soyad_ekle").val()=="" ) {


			$("#bos-alan").fadeIn().delay(2000).fadeOut();

			event.preventDefault();

		} else {			
			
			$.ajax({



				
				type:"post",
				url:"islem.php",
				data:$("#jquery-ekle").serialize(),
				
				success:function(cevap) {

					
					$("#basari-islem").fadeIn().text(cevap).delay(1000).fadeOut();
					$["#ad_ekle"].val("");
					$["#soyad_ekle"].val("");

				}

			})			
		}
	});


	$("#geridon").click(function(){

		$("#kayit-ekle").hide();
		$("#listele").fadeIn(1000);
		location.reload();
		
	});
	$("#geridondum").click(function(){

		$("#kayit-duzenle").hide();
		$("#listele").fadeIn(1000);
		
		location.reload();
		
	});
	$("body").on("click",".sildi",function(){
		var sildi_id='id='+$(this).attr("id");
		if(confirm('silinecek onaylıyon mu?'+sildi_id)){
			$.ajax({

				type:"post",
				url:"islem.php",
				data: sildi_id,		//id alır ama 1 olarak alıyor bunun cinsinin id olması lazım id=1 gibi yolla  //post olarak karşıya göderilir anahtar keyle birlikte.
				
				success:function(silici) {
					//alert("basarılı");
					//location.reload();
					$("#basarili-islem").fadeIn().text(silici).delay(1000).fadeOut();
					setTimeout(function(){
						location.reload();
					},1500);
					

				}

			})
		}

	});
	$("body").on("click",".duzenledim",function(){
		var duzenle_id='id='+$(this).attr("id");
		$("#listele").hide();
		$("#kayit-duzenle").fadeIn();
		
		$("#guncelle").click(function(){
			
			$.ajax({
		
				type:"post",
				url:"duzenle.php",
				data:$("#jquery-duzenle").serialize() + duzenle_id,
				
				success:function(duzenleyici) {
	
					
					$("#basarili-islem-duzenle").fadeIn().text(duzenleyici).delay(1000).fadeOut();
					
				}

			})
	
			
		});

	});

	








});




 /*if(confirm('silinecek onaylıyon mu?'+duzenle_id)){
		$.ajax({




		})
		
		
		}*/