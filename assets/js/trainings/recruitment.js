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
    text_select_check('#first_committee','#error_first_committee',error_first_committee,'Select your desired committee');
    text_select_check('#second_committee','#error_second_committee',error_second_committee,'Select your desired secondary committee');

	/*$('#current_position') // select the radio by its id
    .change(function(){ // bind a function to the change event
        if($(this).children("option:selected").val() != 'member'){ // check if the radio is checked
			$('.container_radio').addClass('disabled', {duration:500});
		} else {
			$('.container_radio').removeClass('disabled', {duration:500});
		}
    });*/

	$('input[name="aiche_before"]') // select the radio by its id
    .change(function(){ // bind a function to the change event
        if( $(this).is(":checked") ){ // check if the radio is checked
			var val = $(this).val(); // retrieve the value
			if (val == 'yes') {
				$('.container_radio_yes').addClass('active');
				$('.container_radio_no').removeClass('active');
				$('#error_aiche_before').hide();
			} else {
				$('.container_radio_no').addClass('active');
				$('.container_radio_yes').removeClass('active');
				$('#error_aiche_before').slideDown(500);
			}
        }
    });

    $('#second_committee').bind('input', function () {
        let first = $('#first_committee').val();
        let second =  $('#second_committee').val();
        if(first === second) {
            $('.warining_aiche').show(500);
        } else {
            $('.warining_aiche').hide(500);
        }
    });
	$('#aiche_next').click(function() {
		
        if ($('input[name="aiche_before"]:checked').length == 0) {
            $('#error_aiche_before').text('You must choose whether you were in a chapter or not');
        } else {
            let error_first_committee = $('#error_first_committee').is(':empty');
            let error_second_committee = $('#error_second_committee').is(':empty');
            let error_aiche_before = $('#error_aiche_before').is(':empty');
            
            let first_committee = $.trim($('#first_committee').val()).length;
            let second_committee = $.trim($('#second_committee').val()).length;
            
            if (!error_first_committee || !error_second_committee || !error_aiche_before) {
                $('.error_aiche').show(500);
                $('#error_aiche').text('Check the data you entered');
            } else if (first_committee == 0 || second_committee == 0) {
                $('.error_aiche').show(500);
                $('#error_aiche').text('please enter the required fields to be able to continue!');
         
                
            } else {
                next_section('#aiche','#aiche_reposition');
                $('.progress-bar-width').css('width', '60%');
            }
        }
		
		
		
	});
	$('#aiche_prev').click(function() {
		next_section('#aiche','#education');
		$('.progress-bar-width').css('width', '20%');
	});

	/******************** AICHE REPOSITION ********************/
	
	$('#aiche_reposition_next').click(function() {
	    next_section('#aiche_reposition','#open_area');
        $('.progress-bar-width').css('width', '80%');
    });
	$('#aiche_reposition_prev').click(function() {
		next_section('#aiche_reposition','#aiche');
		$('.progress-bar-width').css('width', '40%');
	});
	/***************OPEN AREA *************** */
	$('#open_area_prev').click(function() {
		next_section('#open_area','#aiche_reposition');
        $('.progress-bar-width').css('width', '60%');
	});
	//$('.success_content a').each(function () {
		//var href = $(this).attr('href');
		
	//});
	$("#btnSubmit").click(function () {
		let first = $('#first_committee').val();
		let second =  $('#second_committee').val();
		
		let hrmURL = "https://drive.google.com/file/d/1T2_A0s0bTQqN8Y_1zuqczxE35Exrincq/view?usp=drivesdk";
		let websiteURL = "https://drive.google.com/file/d/1SIUzyO7fEk12NP58YOSkK8-HN04ZpWXJ/view?usp=drivesdk";
		let dpURL = "https://drive.google.com/file/d/1TEKppE_we6hM4F63d4dDMtH90wy-Yo6f/view?usp=drivesdk";
		let ecURL = "https://drive.google.com/file/d/1hjQ_VYlobUERadcYfOZUrJskacPh4Btt/view?usp=sharing";
		let hrdURL = "https://drive.google.com/file/d/1TBAceahVV8x3d0U2DFWMzJyyBAjLlCD8/view?usp=drivesdk";
		let multimediaURL = "https://drive.google.com/file/d/1SsOXSYBzIZ50vgdRaQCGWVsc5rxb0qOO/view?usp=drivesdk";
		let ocURL = "https://drive.google.com/file/d/1SeTBVf2-BWdchXM1QFoZMH7K-L1TDg_A/view?usp=drivesdk";
		let prURL = "https://drive.google.com/file/d/1Scm9ja2Lh0kZY8D95XPva_2hE2Mh5BOF/view?usp=drivesdk";
		let sacURL = "https://drive.google.com/file/d/1SSR6XY2Jr04dkx0ZT3zGX5K4Pr4CYyqy/view?usp=drivesdk";
		let technicalURL = "https://drive.google.com/file/d/1SKkV-j9QPzfOh-IoLaJCKPAl65dm358Z/view?usp=drivesdk";
		let mobileURL = "https://drive.google.com/file/d/1TLapebFabhl3h0jODfwcUVVnLSKubUAt/view?usp=drivesdk";
		
		if(first === 'hrm') {
			$('.progress-bar-width').css('width', '100%');
			$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			$('.success_content .first_task_link').attr('href', hrmURL);
			$('.success_content .first_task_link_span').text('HRM');
			window.setTimeout(function () {
				window.open(hrmURL, '_blank');
			}, 1000);
		}
		if(first === 'website') {
			$('.progress-bar-width').css('width', '100%');
			$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			$('.success_content .first_task_link').attr('href', websiteURL);
			$('.success_content .first_task_link_span').text('Website');
			window.setTimeout(function () {
				window.open(websiteURL, '_blank');
			}, 1000);
		}
		if(first === 'dp') {
			$('.progress-bar-width').css('width', '100%');
			$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			$('.success_content .first_task_link').attr('href', dpURL);
			$('.success_content .first_task_link_span').text('DP');
			window.setTimeout(function () {
				window.open(dpURL, '_blank');
			}, 1000);
		}
		if(first === 'ec') {
			$('.progress-bar-width').css('width', '100%');
			$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			$('.success_content .first_task_link').attr('href', ecURL);
			$('.success_content .first_task_link_span').text('EC');
			window.setTimeout(function () {
				window.open(ecURL, '_blank');
			}, 1000);
		}
		if(first === 'hrd') {
			$('.progress-bar-width').css('width', '100%');
			$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			$('.success_content .first_task_link').attr('href', hrdURL);
			$('.success_content .first_task_link_span').text('HRD');
			window.setTimeout(function () {
				window.open(hrdURL, '_blank');
			}, 1000);
		}
		if(first === 'multimedia') {
			$('.progress-bar-width').css('width', '100%');
			$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			$('.success_content .first_task_link').attr('href', multimediaURL);
			$('.success_content .first_task_link_span').text('Multimedia');
			window.setTimeout(function () {
				window.open(multimediaURL, '_blank');
			}, 1000);
		}
		if(first === 'oc') {
			$('.progress-bar-width').css('width', '100%');
			$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			$('.success_content .first_task_link').attr('href', ocURL);
			$('.success_content .first_task_link_span').text('OC');
			window.setTimeout(function () {
				window.open(ocURL, '_blank');
			}, 1000);
		}
		if(first === 'pr') {
			$('.progress-bar-width').css('width', '100%');
			$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			$('.success_content .first_task_link').attr('href', prURL);
			$('.success_content .first_task_link_span').text('PR&FR');
			window.setTimeout(function () {
				window.open(prURL, '_blank');
			}, 1000);
		}
		if(first === 'sac') {
			$('.progress-bar-width').css('width', '100%');
			$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			$('.success_content .first_task_link').attr('href', sacURL);
			$('.success_content .first_task_link_span').text('SAC');
			window.setTimeout(function () {
				window.open(sacURL, '_blank');
			}, 1000);
		}
		if(first === 'technical') {
			$('.progress-bar-width').css('width', '100%');
			$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			$('.success_content .first_task_link').attr('href', technicalURL);
			$('.success_content .first_task_link_span').text('Technical');
			window.setTimeout(function () {
				window.open(technicalURL, '_blank');
			}, 1000);
		}
		if(first === 'mobile') {
			$('.progress-bar-width').css('width', '100%');
			$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			$('.success_content .first_task_link').attr('href', mobileURL);
			$('.success_content .first_task_link_span').text('Android/IOS');
			window.setTimeout(function () {
				window.open(mobileURL, '_blank');
			}, 1000);
		}

		if (second === 'hrm') {
			$('.success_content .second_task_link').attr('href', hrmURL);
			$('.success_content .second_task_link_span').text('HRM');
			window.setTimeout(function () {
				window.open(hrmURL, '_blank');
			}, 1000);
		}
		if (second === 'website') {
			$('.success_content .second_task_link').attr('href', websiteURL);
			$('.success_content .second_task_link_span').text('Website');
			window.setTimeout(function () {
				window.open(websiteURL, '_blank');
			}, 1000);
		}
		if (second === 'ec') {
			$('.success_content .second_task_link').attr('href', ecURL);
			$('.success_content .second_task_link_span').text('EC');
			window.setTimeout(function () {
				window.open(ecURL, '_blank');
			}, 1000);
		}
		if (second === 'dp') {
			$('.success_content .second_task_link').attr('href', dpURL);
			$('.success_content .second_task_link_span').text('DP');
			window.setTimeout(function () {
				window.open(dpURL, '_blank');
			}, 1000);
		}
		if (second === 'oc') {
			$('.success_content .second_task_link').attr('href', ocURL);
			$('.success_content .second_task_link_span').text('OC');
			window.setTimeout(function () {
				window.open(ocURL, '_blank');
			}, 1000);
		}
		if (second === 'sac') {
			$('.success_content .second_task_link').attr('href', sacURL);
			$('.success_content .second_task_link_span').text('SAC');
			window.setTimeout(function () {
				window.open(sacURL, '_blank');
			}, 1000);
		}
		if (second === 'mobile') {
			$('.success_content .second_task_link').attr('href', mobileURL);
			$('.success_content .second_task_link_span').text('Android/IOS');
			window.setTimeout(function () {
				window.open(mobileURL, '_blank');
			}, 1000);
		}
		if (second === 'multimedia') {
			$('.success_content .second_task_link').attr('href', multimediaURL);
			$('.success_content .second_task_link_span').text('Multimedia');
			window.setTimeout(function () {
				window.open(multimediaURL, '_blank');
			}, 1000);
		}
		if (second === 'technical') {
			$('.success_content .second_task_link').attr('href', technicalURL);
			$('.success_content .second_task_link_span').text('Technical');
			window.setTimeout(function () {
				window.open(technicalURL, '_blank');
			}, 1000);
		}
		if (second === 'pr') {
			$('.success_content .second_task_link').attr('href', prURL);
			$('.success_content .second_task_link_span').text('PR&FR');
			window.setTimeout(function () {
				window.open(prURL, '_blank');
			}, 1000);
		}
		if (second === 'hrd') {
			$('.success_content .second_task_link').attr('href', hrdURL);
			$('.success_content .second_task_link_span').text('HRD');
			window.setTimeout(function () {
				window.open(hrdURL, '_blank');
			}, 1000);
		}
		
		$(this).prop('disabled', true);
		
        var formData = new FormData($('#formID')[0]);
            
		$.ajax({
			url: 'form.php',
			type: 'POST',
			data: formData,
			async: false,
			success: function (myData) {
				
			},
			cache: false,
			contentType: false,
			processData: false
		});
        
    
    });


});