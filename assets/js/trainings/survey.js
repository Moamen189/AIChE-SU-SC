$(function () {
    'use strict';
     
     $(".hysys_img img.img-responsive").one("load", function () {
         // do stuff
         $(".overlay").fadeOut("slow");
     }).each(function () {
         if (this.complete) {
             $(this).trigger('load'); // For jQuery < 3.0 
         }
     });
     
    $("#btnSubmit").click(function () {
        
        $(':input[type="submit"]').prop('disabled', true);

            var formData = new FormData($('#formID')[0]);
            
            $.ajax({
                url: 'form.php',
                type: 'POST',
                data: formData,
                async: false,
                success: function (myData) {
                    alert(myData);
                    /*if (myData == 0) {
                    } else {
                       $('.overlay_success').show();
                        $('body').css('overflow','hidden');
                        window.setTimeout(function () {
                        window.location.href = 'http://aichesusc.org/aiche-blog-home-page/';
                    }, 1000);
                    }*/

                },
                cache: false,
                contentType: false,
                processData: false
            });
        
    
    });
   
});