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
	$('#personal_next').click(function() {
		let error_name = $('#error_name').is(':empty');
		let error_email = $('#error_email').is(':empty');
		let error_phone = $('#error_phone').is(':empty');
		let error_city = $('#error_city').is(':empty');
		let error_facebook = $('#error_facebook').is(':empty');

		let name = $.trim($('#name').val()).length;
		let email = $.trim($('#email').val()).length;
		let phone = $.trim($('#phone').val()).length;
		let city = $.trim($('#city').val()).length;
		let facebook = $.trim($('#facebook').val()).length;

		if (!error_name || !error_email || !error_phone || !error_city || !error_facebook) {
    		$('.error_personal_info').show(500);
    		$('#error_personal_info').text('Check the data you entered');
    	} else if (name == 0 || email == 0 || phone == 0 ||  city == 0 || facebook == 0) {
    		$('.error_personal_info').show(500);
    		$('#error_personal_info').text('please enter the required fields to be able to continue!');
    	} else {
			next_section('#personal_info','#education');
			$('.progress-bar-width').css('width', '20%');
    	}
	});

	/**************** EDUCATION *************/
	text_check_empty('#university','#error_university',error_university, 'University is required');
	text_check_empty('#faculty','#error_faculty', error_faculty,'Faculty is required');
	text_select_check('#ac_yr','#error_ac_yr',error_ac_yr,'Select the academic year');
	$('#edu_next').click(function() {
		let error_university = $('#error_university').is(':empty');
		let error_faculty = $('#error_faculty').is(':empty');
		let error_ac_yr = $('#error_ac_yr').is(':empty');

		let university = $.trim($('#university').val()).length;
		let faculty = $.trim($('#faculty').val()).length;
		let ac_yr = $.trim($('#ac_yr').val()).length;

		if (!error_university || !error_faculty || !error_ac_yr) {
    		$('.error_education').show(500);
    		$('#error_education').text('Check the data you entered');
    	} else if (university == 0 || faculty == 0 || ac_yr == 0) {
    		$('.error_education').show(500);
    		$('#error_education').text('please enter the required fields to be able to continue!');
    	} else {
			next_section('#education','#aiche');
			$('.progress-bar-width').css('width', '40%');
    	}
	});
	$('#edu_prev').click(function() {
		next_section('#education','#personal_info');
		$('.progress-bar-width').css('width', '0%');
	});

	/**************************** AICHE  **********************/
	text_select_check('#current_position','#error_current_position',error_current_position,'Select yuour current position');
	text_select_check('#current_committee','#error_current_committee',error_current_committee,'Select yuour current committee');

	$('#current_position') // select the radio by its id
    .change(function(){ // bind a function to the change event
        if($(this).children("option:selected").val() != 'member'){ // check if the radio is checked
			$('.container_radio').addClass('disabled', {duration:500});
		} else {
			$('.container_radio').removeClass('disabled', {duration:500});
		}
    });

	$('input[name="reposition"]') // select the radio by its id
    .change(function(){ // bind a function to the change event
        if( $(this).is(":checked") ){ // check if the radio is checked
			var val = $(this).val(); // retrieve the value
			if (val == 'yes') {
				$('.container_radio_yes').addClass('active');
				$('.container_radio_no').removeClass('active');
				$('#error_reposition').hide();
			} else {
				$('.container_radio_no').addClass('active');
				$('.container_radio_yes').removeClass('active');
				$('#error_reposition').slideDown(500);
			}
        }
    });
	$('#aiche_next').click(function() {
		if($.trim($('#current_position').val()) == 'president' || $.trim($('#current_position').val()) == 'vice_president') {
			let error_current_position = $('#error_current_position').is(':empty');
			let current_position = $.trim($('#current_position').val()).length;
			
			if (!error_current_position) {
				$('.error_aiche').show(500);
				$('#error_aiche').text('Check the data you entered');
			} else if (current_position == 0) {
				$('.error_aiche').show(500);
				$('#error_aiche').text('please enter the required fields to be able to continue!');
			} else {
				next_section('#aiche','#open_area');
				$('.progress-bar-width').css('width', '80%');
			}
			
		} else if($.trim($('#current_position').val()) == 'manager' || $.trim($('#current_position').val()) == 'vice_manager' || $.trim($('#current_position').val()) == 'head' ) {
			let error_current_position = $('#error_current_position').is(':empty');
			let error_current_committee = $('#error_current_committee').is(':empty');
			
			let current_position = $.trim($('#current_position').val()).length;
			let current_committee = $.trim($('#current_committee').val()).length;
			
			if (!error_current_position || !error_current_committee) {
				$('.error_aiche').show(500);
				$('#error_aiche').text('Check the data you entered');
			} else if (current_position == 0 || current_committee == 0) {
				$('.error_aiche').show(500);
				$('#error_aiche').text('please enter the committee. If you are a manager select any committee related to your branch');
			} else {
				next_section('#aiche','#open_area');
				$('.progress-bar-width').css('width', '80%');
			}
		} else {
			if ($('input[name="reposition"]:checked').length == 0) {
				$('#error_reposition').text('You must choose whether you want to reposition or not');
			} else {
				let error_current_position = $('#error_current_position').is(':empty');
				let error_current_committee = $('#error_current_committee').is(':empty');
				
				let current_position = $.trim($('#current_position').val()).length;
				let current_committee = $.trim($('#current_committee').val()).length;
				
				if (!error_current_position || !error_current_committee) {
					$('.error_aiche').show(500);
					$('#error_aiche').text('Check the data you entered');
				} else if (current_position == 0 || current_committee == 0) {
					$('.error_aiche').show(500);
					$('#error_aiche').text('please enter the required fields to be able to continue!');
				} else {
					if($('input[name="reposition"]:checked').val() == 'yes') {
						next_section('#aiche','#aiche_reposition');
						$('.progress-bar-width').css('width', '60%');
					} else {
						next_section('#aiche','#open_area');
						$('.progress-bar-width').css('width', '80%');
					}
				}
			}
		}
		
		
	});
	$('#aiche_prev').click(function() {
		next_section('#aiche','#education');
		$('.progress-bar-width').css('width', '20%');
	});

	/******************** AICHE REPOSITION ********************/
	text_check_empty('#reposition_reason','#error_reposition_reason',error_reposition_reason,'Mention why do you want to reposition?');
	text_select_check('#new_committee','#error_new_committee',error_new_committee,'Select a new committee');
	text_check_empty('#job_description','#error_job_description',error_job_description,'Mention the job description of the new committee');
	$('#aiche_reposition_next').click(function() {
		let error_reposition_reason = $('#error_reposition_reason').is(':empty');
		let error_new_committee = $('#error_new_committee').is(':empty');
		let error_job_description = $('#error_job_description').is(':empty');

		let reposition_reason = $.trim($('#reposition_reason').val()).length;
		let new_committee = $.trim($('#new_committee').val()).length;
		let job_description = $.trim($('#job_description').val()).length;

		if (!error_reposition_reason || !error_new_committee || !error_job_description) {
    		$('.error_aiche_reposition').show(500);
			$('#error_aiche_reposition').text('Check the data you entered');
			alert('sd');
    	} else if (reposition_reason == 0 || new_committee == 0 || job_description == 0) {
    		$('.error_aiche_reposition').show(500);
			$('#error_aiche_reposition').text('please enter the required fields to be able to continue!');
		} else {
			next_section('#aiche_reposition','#open_area');
			$('.progress-bar-width').css('width', '80%');
    	}
	});
	$('#aiche_reposition_prev').click(function() {
		next_section('#aiche_reposition','#aiche');
		$('.progress-bar-width').css('width', '40%');
	});
	/***************OPEN AREA *************** */
	$('#open_area_prev').click(function() {
		/*next_section('#aiche_reposition','#aiche');
		$('.progress-bar-width').css('width', '40%');*/
		if($('input[name="reposition"]:checked').val() == 'yes') {
			next_section('#open_area','#aiche_reposition');
			$('.progress-bar-width').css('width', '60%');
		} else {
			next_section('#open_area','#aiche');
			$('.progress-bar-width').css('width', '40%');
		}
	});
	//$('.success_content a').each(function () {
		//var href = $(this).attr('href');
		
	//});
	$("#btnSubmit").click(function () {
		if($('#current_position').children("option:selected").val() != 'member'){ // check if the radio is checked
			$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			$('.success_content p').text('You are successfully recruited. Hope you have a nice season with us. Keep it up!');
			$('.success_content a').attr('href', 'http://aichesusc.org/aiche-blog-home-page/');
			$('.success_content a').text('Visit Our Blog');
			window.setTimeout(function () {
				window.location.href = 'http://aichesusc.org/aiche-blog-home-page/';
			}, 1000);
		} else {
			if($('input[name="reposition"]:checked').val() == 'no') {
				$('.overlay_success').css('opacity', '1').css('visibility','visible');
				$('body').css('overflow','hidden');
				$('.success_content p').text('You are successfully recruited. Hope you have a nice season with us. Keep it up!');
				$('.success_content a').attr('href', 'http://aichesusc.org/aiche-blog-home-page/');
				$('.success_content a').text('Visit Our Blog');
				window.setTimeout(function () {
					window.location.href = 'http://aichesusc.org/aiche-blog-home-page/';
				}, 1000);
			} else {
				if ($('#new_committee').children("option:selected").val() == 'hrm') {
					$('.overlay_success').css('opacity', '1').css('visibility','visible');
					$('body').css('overflow','hidden');
					$('.success_content p').text('You want to make a resposition to HRM committe. You will be redirected to the task. Wait a moment! You will be redirected directly in 5 sec');
					var link = 'https://drive.google.com/file/d/1jeAfLMscyyzq6aFlGSFJvchytI2kqiji/view?usp=sharing';
					$('.success_content a').attr('href', link);
					$('.success_content a').text('Click here to go to the test directly');
					window.setTimeout(function () {
						window.location.href = link;
					}, 1000);
				} else if ($('#new_committee').children("option:selected").val() == 'hrd') {
					$('.overlay_success').css('opacity', '1').css('visibility','visible');
					$('body').css('overflow','hidden');
					$('.success_content p').text('You want to make a resposition to HRD committe. You will be redirected to the task. Wait a moment! You will be redirected directly in 5 sec');
					var link = 'https://drive.google.com/file/d/1Ug0pgGADIdNcRV8XogF29cgy6eiz0UmM/view?usp=sharing';
					$('.success_content a').attr('href', link);
					$('.success_content a').text('Click here to go to the test directly');
					window.setTimeout(function () {
						window.location.href = link;
					}, 1000);
				} else if ($('#new_committee').children("option:selected").val() == 'oc') {
					$('.overlay_success').css('opacity', '1').css('visibility','visible');
					$('body').css('overflow','hidden');
					$('.success_content p').text('You want to make a resposition to OC committe. You will be redirected to the task. Wait a moment! You will be redirected directly in 5 sec');
					var link = 'https://drive.google.com/file/d/1Arhi8JctN9JnAJ61UViy9vgNQLqrJ368/view?usp=sharing';
					$('.success_content a').attr('href', link);
					$('.success_content a').text('Click here to go to the test directly');
					window.setTimeout(function () {
						window.location.href = link;
					}, 1000);
				} else if ($('#new_committee').children("option:selected").val() == 'ec') {
					$('.overlay_success').css('opacity', '1').css('visibility','visible');
					$('body').css('overflow','hidden');
					$('.success_content p').text('You want to make a resposition to EC committe. You will be redirected to the task. Wait a moment! You will be redirected directly in 5 sec');
					var link = 'https://drive.google.com/file/d/1-aB7aMBzz7sjm4lmLpIf7sFgiq7DDZ5s/view?usp=sharing';
					$('.success_content a').attr('href', link);
					$('.success_content a').text('Click here to go to the test directly');
					window.setTimeout(function () {
						window.location.href = link;
					}, 1000);
				} else if ($('#new_committee').children("option:selected").val() == 'dp') {
					$('.overlay_success').css('opacity', '1').css('visibility','visible');
					$('body').css('overflow','hidden');
					$('.success_content p').text('You want to make a resposition to DP committe. You will be redirected to the task. Wait a moment! You will be redirected directly in 5 sec');
					var link = 'https://drive.google.com/file/d/16ZrZ_zqo9jAda_TexG5yqJdTTucEvAeY/view?usp=sharing';
					$('.success_content a').attr('href', link);
					$('.success_content a').text('Click here to go to the test directly');
					window.setTimeout(function () {
						window.location.href = link;
					}, 1000);
				} else if ($('#new_committee').children("option:selected").val() == 'sac') {
					$('.overlay_success').css('opacity', '1').css('visibility','visible');
					$('body').css('overflow','hidden');
					$('.success_content p').text('You want to make a resposition to SAC committe. You will be redirected to the task. Wait a moment! You will be redirected directly in 5 sec');
					var link = 'https://drive.google.com/file/d/1muVLotcPYU0UkO-fp_DJO2jtd0gNgGXE/view?usp=sharing';
					$('.success_content a').attr('href', link);
					$('.success_content a').text('Click here to go to the test directly');
					window.setTimeout(function () {
						window.location.href = link;
					}, 1000);
				} else if ($('#new_committee').children("option:selected").val() == 'technical') {
					$('.overlay_success').css('opacity', '1').css('visibility','visible');
					$('body').css('overflow','hidden');
					$('.success_content p').text('You want to make a resposition to Technical committe. You will be redirected to the task. Wait a moment! You will be redirected directly in 5 sec');
					var link = 'https://drive.google.com/file/d/1Buwq30TNzF0SsBML5eey5PLtN9LECEXu/view?usp=sharing';
					$('.success_content a').attr('href', link);
					$('.success_content a').text('Click here to go to the test directly');
					window.setTimeout(function () {
						window.location.href = link;
					}, 1000);
				} else if ($('#new_committee').children("option:selected").val() == 'multimedia') {
					$('.overlay_success').css('opacity', '1').css('visibility','visible');
					$('body').css('overflow','hidden');
					$('.success_content p').text('You want to make a resposition to Multimedia committe. You will be redirected to the task. Wait a moment! You will be redirected directly in 5 sec');
					var link = 'https://drive.google.com/file/d/1NHxygzS6D4v3nTZPspTa2HCTdatLcirb/view?usp=sharing';
					$('.success_content a').attr('href', link);
					$('.success_content a').text('Click here to go to the test directly');
					window.setTimeout(function () {
						window.location.href = link;
					}, 1000);
				} else if ($('#new_committee').children("option:selected").val() == 'mobile') {
					$('.overlay_success').css('opacity', '1').css('visibility','visible');
					$('body').css('overflow','hidden');
					$('.success_content p').text('You want to make a resposition to Android/IOS committe. You will be redirected to the task. Wait a moment! You will be redirected directly in 5 sec');
					var link = 'https://drive.google.com/file/d/1ukP7bWX5hoyxBZhFh3ZVkRYtceFg8ZAK/view?usp=sharing';
					$('.success_content a').attr('href', link);
					$('.success_content a').text('Click here to go to the test directly');
					window.setTimeout(function () {
						window.location.href = link;
					}, 1000);
				} else if ($('#new_committee').children("option:selected").val() == 'website') {
					$('.overlay_success').css('opacity', '1').css('visibility','visible');
					$('body').css('overflow','hidden');
					$('.success_content p').text('You want to make a resposition to Website committe. You will be redirected to the task. Wait a moment! You will be redirected directly in 5 sec');
					var link = 'https://drive.google.com/file/d/10dD0htM6vJS8lxyYqV0YSt6PRxjpmiHG/view?usp=sharing';
					$('.success_content a').attr('href', link);
					$('.success_content a').text('Click here to go to the test directly');
					window.setTimeout(function () {
						window.location.href = link;
					}, 1000);
				} else if ($('#new_committee').children("option:selected").val() == 'pr') {
					$('.overlay_success').css('opacity', '1').css('visibility','visible');
					$('body').css('overflow','hidden');
					$('.success_content p').text('You want to make a resposition to PR&FR committe. You will be redirected to the task. Wait a moment! You will be redirected directly in 5 sec');
					var link = 'https://drive.google.com/file/d/1Wb-lcaKw_dX5_vkqRA0mJU-XYRl2uDnu/view?usp=sharing';
					$('.success_content a').attr('href', link);
					$('.success_content a').text('Click here to go to the test directly');
					window.setTimeout(function () {
						window.location.href = link;
					}, 1000);
				}
			}
		}
		
		$(this).prop('disabled', true);
		
        var formData = new FormData($('#formID')[0]);
            
		$.ajax({
			url: 'form.php',
			type: 'POST',
			data: formData,
			async: false,
			success: function (myData) {
			alert(myData);	
			},
			cache: false,
			contentType: false,
			processData: false
		});
        
    
    });


});