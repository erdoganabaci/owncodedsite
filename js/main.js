$(document).ready(function() {
$("#modal1").modal('show');
$("#gizli").click(function(){
    $("#modalgiz").modal('show');
});
$("#kosul").click(function(){
    $("#modalkosul").modal('show');
});
$("#reg_buton").click(function(){
    
    
    if ($("#reg_adsoyad").val()=="" || $("#reg_email").val()=="" || $("#reg_pass").val()=="" || $("#regagain_pass").val()=="" ) {


        $("#reg_kayitfail").fadeIn().delay(2000).fadeOut();

        event.preventDefault();

    }else {			
			
        $.ajax({
   
            type:"post",
            url:"insert.php",
            data:$("#reg_form").serialize(),
            
            success:function(cevap) {
                if(cevap=="Hata"){
                    $("#reg_kayit").fadeIn().removeClass("bg-danger").addClass("bg-warning").text("Kayıt Başarısız Oldu Lütfen Site Admini İle İletişime Geçin..").delay(1000).fadeOut();
                }
                
                $("#reg_kayit").fadeIn().text(cevap).delay(1000).fadeOut();
                $["#reg_email"].val("");
                $["#reg_adsoyad"].val("");
                $["#reg_pass"].val("");
                $["#regagain_pass"].val("");
               
               
            }

        })			
    } 
});

$("#sign_buton").click(function(){
    if ( $("#sign_email").val()=="" || $("#sign_pass").val()==""  ) {


        $("#sign_kayitfail").fadeIn().delay(2000).fadeOut();

        event.preventDefault();

    }
 else{   $.ajax({
   
        type:"post",
        url:"loginsuccess.php",
        data:$("#sign_form").serialize(),
        
        success:function(cevap) {
           /* if(cevap=="Hata"){
                $("#reg_kayit").fadeIn().removeClass("bg-danger").addClass("bg-warning").text("Kayıt Başarısız Oldu Lütfen Site Admini İle İletişime Geçin..").delay(1000).fadeOut();
           $("#sign_success").fadeIn().text(cevap).delay(1000).fadeOut();
            }*/
            if(cevap=="Hoşgeldin"){
            $("#sign_success").fadeIn().text(cevap).delay(3000).fadeOut();
           
            setTimeout(function(){     
           
                location.reload();
                },1000); 
        setTimeout(function(){     
           
            $("#sign_form").fadeOut();
            },4000);
        }
             else if(cevap=="Hatalı giriş"){
                $("#sign_kayitfail").fadeIn().removeClass("bg-danger").addClass("bg-warning").text("Giriş Başarısız.").delay(1000).fadeOut();
                
                
            }
           
           
        }

    })
    
}

});




});
