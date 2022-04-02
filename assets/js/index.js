 $(function () {
     'use strict';
     
     $(".hysys_img img.img-responsive").one("load", function () {
         // do stuff
         $(".overlay").fadeOut("slow");
     }).each(function () {
         if (this.complete) {
             $(this).trigger('load'); // For jQuery < 3.0 
             // $(this).trigger('load'); // For jQuery >= 3.0 
         }
     });
     
    
    $("#btnSubmit").click(function () {
        
        if($('#name').hasClass('hasError') || $('#phone').hasClass('hasError') || $('#university').hasClass('hasError') || $('#faculty').hasClass('hasError') || $('#facebook').hasClass('hasError')) {
            $('#allCheck').text('Check the data you entered');
            $('#allCheck').show();
        } else if ($('#name').val() == 0 || $('#phone').val() == 0 || $('#university').val() == 0 || $('#faculty').val() == 0 || $('#facebook').val() == 0) {
            $('#allCheck').text('You must enter all required fields');
            $('#allCheck').show();
        } else {
            $(':input[type="submit"]').prop('disabled', true);

            var formData = new FormData($('#formID')[0]);
            
            $.ajax({
                url: 'form.php',
                type: 'POST',
                data: formData,
                async: false,
                success: function (myData) {
                    if (myData == 0) {
                    } else {
                        $('.overlay_success').show();
                        $('body').css('overflow','hidden');
                        window.setTimeout(function () {
                        window.location.href = 'http://aichesusc.org/aiche-blog-home-page/';
                    }, 1000);
                    }

                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    
    });
     
});    