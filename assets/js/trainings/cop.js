$(function() {
	'use strict';
	/************************* FUNCTIONS **********************/
	/* Empty field */
	/*$('input').bind('input',function(){
		$('.error_section').hide(500);
	});*/
	$("input").focus(function() { 
		$('.error_section').slideUp(700);
		
	});
	$("textarea").focus(function() { 
		$('.error_section').slideUp(700);
		
	});
	$("select").focus(function() { 
		$('.error_section').slideUp(700);
		
	});
    function text_check_empty(id,error_id,error_var,error_message) {
    	$(id).bind('input', function () {
			var name_val = $(id).val();
	        if (name_val.length != '') {
	            error_var = '';
				$(error_id).text(error_var);
				$(id).removeClass('has-error');
				$('.error_personal_info').hide();
	        } else {
	            error_var = error_message;
				$(error_id).text(error_var);
				$(id).addClass('has-error');
	        }
	    });
	}
	
    /* Email Check */
    function text_check_email(id,error_id,error_var) {
    	//var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    	$(id).bind('input', function () {
	    	if($.trim($(id).val()).length == 0) {
				error_var = 'Email is required';
				$(error_id).text(error_var);
				$(id).addClass('has-error');
				$('.error_personal_info').hide();
			} else {
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if (!filter.test($(id).val())) {
					error_var = 'Invalid Email';
					$(error_id).text(error_var);
					$(id).addClass('has-error');
					$('.error_personal_info').hide();
				} else {
					error_var = '';
					$(error_id).text(error_var);
					$(id).removeClass('has-error');
				}
			}
		});
    }

    /* phone field Check */
    function text_check_phone(id,error_id,error_var) {
    	$(id).bind('input', function () {
	    	if($.trim($(id).val()).length == 0) {
				error_var = 'Phone is required';
				$(error_id).text(error_var);
				$(id).addClass('has-error');
				$('.error_personal_info').hide();
			} else {
				//var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
				var phoneno = /^[0-9]+$/;
				if (!phoneno.test($(id).val()) || $(id).val().length < 6) {
					error_var = 'Invalid Phone Number';
					$(error_id).text(error_var);
					$(id).addClass('has-error');
					$('.error_personal_info').hide();
				} else {
					error_var = '';
					$(error_id).text(error_var);
					$(id).removeClass('has-error');
				}
			}
		});
	}
	/********** FACEBOOK CHECK ************/
	function text_url_check(id,error_id,error_var) {
		$(id).bind('input', function() {
			if($.trim($(id).val()).length == 0) {
				error_var = 'Facebook URL is required';
				$(error_id).text(error_var);
				$(id).addClass('has-error');
				$('.error_personal_info').hide();
			} else {
				if(/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test($(id).val())) {
					if(!$(id).val().includes('facebook.com')) {
						error_var = 'Please enter a valid facebook URL';
						$(error_id).text(error_var);
						$(id).addClass('has-error');
						$('.error_personal_info').hide();
					} else {
						error_var = '';
						$(error_id).text(error_var);
						$(id).removeClass('has-error');
						$('.error_personal_info').hide();
					}	
				} else {
					error_var = 'Please enter a valid facebook URL';
					$(error_id).text(error_var);
					$(id).addClass('has-error');
					$('.error_personal_info').hide();
				}
				
			}
		});
	}
	/********* SELECT CHECK *******************/
	function text_select_check(id,error_id,error_var,error_message) {
		$(id).change(function(){
			var checked = $(this).children("option:selected").val();
			if(checked == '') {
				error_var = error_message;
				$(error_id).text(error_var);
				$(id).addClass('has-error');
				$('.error_personal_info').hide();
			} else {
				error_var = '';
				$(error_id).text(error_var);
				$(id).removeClass('has-error');
			}
		});
	}
	/* Next AND PREVIOUS function */
    function next_section(remove_active_section,show_inactive_section) {
		//$(remove_active_section).hide(500);
		$(remove_active_section).slideUp(500);
		$(show_inactive_section).slideDown(500);
	}

	/************** personal_info *****************/
	text_check_empty('#name','#error_name',error_name,'Name is required');
	text_check_email('#email','#error_email',error_email);
	text_check_phone('#phone','#error_phone',error_phone);
	text_check_empty('#city','#error_city',error_city,'City is required');
    text_url_check('#facebook','#error_facebook',error_facebook);
    text_check_empty('#university','#error_university',error_university, 'University is required');
	text_check_empty('#faculty','#error_faculty', error_faculty,'Faculty is required');
	text_select_check('#ac_yr','#error_ac_yr',error_ac_yr,'Select the academic year');
	$('#btnSubmit').click(function() {
		let error_name = $('#error_name').is(':empty');
		let error_email = $('#error_email').is(':empty');
		let error_phone = $('#error_phone').is(':empty');
		let error_city = $('#error_city').is(':empty');
        let error_facebook = $('#error_facebook').is(':empty');
        let error_university = $('#error_university').is(':empty');
		let error_faculty = $('#error_faculty').is(':empty');
		let error_ac_yr = $('#error_ac_yr').is(':empty');

		let name = $.trim($('#name').val()).length;
		let email = $.trim($('#email').val()).length;
		let phone = $.trim($('#phone').val()).length;
		let city = $.trim($('#city').val()).length;
        let facebook = $.trim($('#facebook').val()).length;
        let university = $.trim($('#university').val()).length;
		let faculty = $.trim($('#faculty').val()).length;
		let ac_yr = $.trim($('#ac_yr').val()).length;

		if (!error_name || !error_email || !error_phone || !error_city || !error_facebook || !error_university || !error_faculty || !error_ac_yr) {
    		$('.error_personal_info').show(500);
            $('#error_personal_info').text('Check the data you entered');   
    	} else if (name == 0 || email == 0 || phone == 0 ||  city == 0 || facebook == 0 || university == 0 || faculty == 0 || ac_yr == 0) {
    		$('.error_personal_info').show(500);
    		$('#error_personal_info').text('please enter the required fields to be able to continue!');
    	} else {
			$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			
		
            $(this).prop('disabled', true);
            
            var formData = new FormData($('#formID')[0]);
                
            $.ajax({
                url: 'form.php',
                type: 'POST',
                data: formData,
                async: false,
                success: function (myData) {
                    $('#loading').hide();
                    $('.success_content').show();
                    $('body').css('overflow','hidden');
                    $('.success_content a').text('Visit Our Blog');
                    window.setTimeout(function () {
                        window.location.href = 'http://aichesusc.org/aiche-blog-home-page/';
                    }, 1000);
		        },
                cache: false,
                contentType: false,
                processData: false
            });
    	}
	});



});