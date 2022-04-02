$(function () {
    'use strict';
    $('#nameCheck').hide();
    
    $('#name').on("keydown keyup paste change", function () {
        full_name_check('#name');
        $("#allCheck").hide();
    });
    $('#phone').on("keydown keyup paste", function () {
        phone_check('#phone');
        $("#allCheck").hide();
    });
    $('#university').bind('input',function () {
        name_check('#university');
        $("#allCheck").hide();
    });
    $('#faculty').keyup(function () {
        name_check('#faculty');
        $("#allCheck").hide();
    });
    /*$('#academic_year').change(function () {
        if ($("#academic_year option:selected").val() == "ago") {
            alert('sds')
        } else {
            alert('ddd');
        }
    });*/
    $('#facebook').bind('input', function () {
        url_check('#facebook');
    });

    $('.custom-select').click(function () {
        $("#selectCheck").hide();
        $("#allCheck").hide();
    });
    
    /*** STRING CHECK ***********/
    function name_check(name) {
        var name_val = $(name).val();
        if (name_val.length != '') {
            $(name).closest('div').find('.namecheck').hide();
            $(name).addClass('success');
            $(name).removeClass('hasError');
        } else {
            $(name).closest('div').find('.namecheck').show();
            $(name).focus();
            $(name).addClass('hasError');
            $(name).removeClass('success');
        }
    }
/*** FULL NAME ***/
    function full_name_check(name) {
        var name_val = $(name).val();
        if (name_val.length != '' && name_val.length > 5 && name_val.indexOf(' ') >= 0) {
            $(name).closest('div').find('.namecheck').hide();
            $(name).addClass('success');
            $(name).removeClass('hasError');
        } else {
            $(name).closest('div').find('.namecheck').show();
            $(name).focus();
            $(name).addClass('hasError');
            $(name).removeClass('success');
        }
    }
    /************ PHONE CHECK *************/
    function phone_check(name) {
        var name_val = $(name).val();
        if (name_val.length != '' && name_val.length == 11) {
            $(name).closest('div').find('.namecheck').hide();
            $(name).addClass('success');
            $(name).removeClass('hasError');
        } else {
            $(name).closest('div').find('.namecheck').show();
            $(name).focus();
            $(name).addClass('hasError');
            $(name).removeClass('success');
        }
    }
/************ URL CHECK *************/
    function url_check(name) {
        var name_val = $(name).val();
        if ((name_val.length != '' && name_val.includes('facebook.com')) || (name_val.length != '' && name_val.includes('Facebook.com')) || (name_val.length != '' && name_val.includes('FACEBOOK'))) {
            $(name).closest('div').find('.namecheck').hide();
            $(name).addClass('success');
            $(name).removeClass('hasError');
        } else {
            $(name).closest('div').find('.namecheck').show();
            $(name).focus();
            $(name).addClass('hasError');
            $(name).removeClass('success');
        }
    }
    
   
});