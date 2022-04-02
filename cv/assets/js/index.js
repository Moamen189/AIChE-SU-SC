$(function () {
	'use strict';
	/**************** ANIMATIONS ********************** */
	$(".choose_btn").click(function(e) {
		e.preventDefault();
		var aid = $(this).attr("href");
		$('html,body').animate({scrollTop: $(aid).offset().top},'slow');
	});
    /************************* FUNCTIONS **********************/
    /* Empty field */
    function text_check_empty(id,error_id,error_var,error_message) {
    	$(id).bind('input', function () {
			var name_val = $(id).val();
	        if (name_val.length != '') {
	            error_var = '';
				$(error_id).text(error_var);
				$(id).removeClass('has-error');
				$(id).next('.success').css('opacity', 1);
				$('#error_personal_info').hide();
				$('#error_education').hide();
				$('#error_work_history').hide();
			} else {
	            error_var = error_message;
				$(error_id).text(error_var);
				$(id).addClass('has-error');
				$(id).next('.success').css('opacity', 0);
				$('#error_personal_info').hide();
				$('#error_education').hide();
				$('#error_work_history').hide();
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
				$(id).next('.success').css('opacity', 0);
				$('#error_personal_info').hide();
				$('#error_education').hide();
				$('#error_work_history').hide();
			} else {
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if (!filter.test($(id).val())) {
					error_var = 'Invalid Email';
					$(error_id).text(error_var);
					$(id).addClass('has-error');
					$(id).next('.success').css('opacity', 0);
					$('#error_personal_info').hide();
					$('#error_education').hide();
					$('#error_work_history').hide();
				} else {
					error_var = '';
					$(error_id).text(error_var);
					$(id).removeClass('has-error');
					$(id).next('.success').css('opacity', 1);
					$('#error_personal_info').hide();
					$('#error_education').hide();
					$('#error_work_history').hide();
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
				$(id).next('.success').css('opacity', 0);
			} else {
				//var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
				var phoneno = /^[0-9]+$/;
				if (!phoneno.test($(id).val()) || $(id).val().length < 6) {
					error_var = 'Invalid Phone Number';
					$(error_id).text(error_var);
					$(id).addClass('has-error');
					$(id).next('.success').css('opacity', 0);
					$('#error_personal_info').hide();
					$('#error_education').hide();
					$('#error_work_history').hide();
				} else {
					error_var = '';
					$(error_id).text(error_var);
					$(id).removeClass('has-error');
					$(id).next('.success').css('opacity', 1);
					$('#error_personal_info').hide();
					$('#error_education').hide();
					$('#error_work_history').hide();
				}
			}
		});
    }
    
    /* Next AND PREVIOUS function */
    function next_section(remove_active_tab,show_inactive_tab,remove_active_section,show_inactive_section) {
    	$(remove_active_section).removeClass('active');
		$(show_inactive_section).addClass('active in');
		$(remove_active_tab).removeClass('active');
		$(remove_active_tab).addClass('completed');
		$(show_inactive_tab).addClass('active');
    }
    $('input').on("focus", function(){
		$(this).parent().find('label').css({'color':'#009ade'});
	});
	$('input').on("focusout", function(){
		$(this).parent().find('label').css({'color':'#555'});
	});
	/********** Personal info *************/
	
	if ($('#list_personal_info').is(":visible")) {
		text_check_empty('#fname','#error_fname',error_fname,'first name is required');
		text_check_empty('#lname','#error_lname',error_lname,'Last name is required');
		text_check_phone('#phone','#error_phone',error_phone);
		text_check_email('#email','#error_email',error_email);
	}
	
    $('#btn_personal_info').click(function(){
  		let error_fname = $('#error_fname').is(':empty');
    	let error_lname = $('#error_lname').is(':empty');
    	let error_phone = $('#error_phone').is(':empty');
    	let error_email = $('#error_email').is(':empty');

    	let fname = $.trim($('#fname').val()).length;
    	let lname = $.trim($('#lname').val()).length;
    	let phone = $.trim($('#phone').val()).length;
    	let email = $.trim($('#email').val()).length;

    	if (!error_fname || !error_lname || !error_address || !error_email || !error_phone) {
    		$('.error_personal_info').show();
    		$('#error_personal_info').text('Check the data you entered');
    	} else if (fname == 0 || lname == 0 || address == 0 ||  phone == 0 || email == 0) {
    		$('.error_personal_info').show();
    		$('#error_personal_info').text('please enter the required fields to be able to continue!');
    	} else {
    		next_section('#list_personal_info','#list_work_history','#personal_info','#work_history');
    	}
	});
	
	
	/*************** WORK HISTORY ******************/
	/*$('input[name="work_current_0"]') // select the radio by its id
		.change(function(){ // bind a function to the change event
			if( $(this).is(":checked") ){ // check if the radio is checked
				$('#end_date_0').val("");
				$('#end_date_0').attr('disabled', true);
			} else {
				$('#end_date_0').attr('disabled', false);
			}
		});	
	*/
	$('#btn_work_history').click(function() {
		
		let job_title = $.trim($('#job_title_0').val()).length;
		let employer = $.trim($('#employer_0').val()).length;
	
		if(job_title == 0 && employer == 0) {
			$('#work_city').val('');
			$('#work_state').val('');
			$('#start_date').val('');
			$('#end_date').val('');
			$('.work_empty').show();
			$("#no_experience").click(function(){
				$('.work_empty').hide();
				next_section('#list_work_history','#list_education','#work_history','#education');
			});
			$("#stay_on_page").click(function(){
				$('.work_empty').hide();
			});
			$("#stay_on_page_ok").click(function(){
				$('.work_empty').hide();
			});
		} else if ((job_title != 0 && employer == 0) || (job_title == 0 && employer != 0)) {
			$('.error_work_history').show();
			$('#error_work_history').text('You should enter both job title and employer');
		} else{
			next_section('#list_work_history','#list_education','#work_history','#education');
		}

		var work_list_0 = [];
		$('#editor_0').children('li').each(function () {
			work_list_0.push($(this).text());
		});
		let workListValue_0 = work_list_0.join('_-_');
		$('#work_list_0').val(workListValue_0);
		
		var work_list_1 = [];
		$('#editor_1').children('li').each(function () {
			work_list_1.push($(this).text());
		});
		let workListValue_1 = work_list_1.join('_-_');
		$('#work_list_1').val(workListValue_1);

		var work_list_2 = [];
		$('#editor_2').children('li').each(function () {
			work_list_2.push($(this).text());
		});
		let workListValue_2 = work_list_2.join('_-_');
		$('#work_list_2').val(workListValue_2);

		var work_list_3 = [];
		$('#editor_3').children('li').each(function () {
			work_list_3.push($(this).text());
		});
		let workListValue_3 = work_list_3.join('_-_');
		$('#work_list_3').val(workListValue_3);

		var work_list_4 = [];
		$('#editor_4').children('li').each(function () {
			work_list_4.push($(this).text());
		});
		let workListValue_4 = work_list_4.join('_-_');
		$('#work_list_4').val(workListValue_4);
		
	});

	
	$('#previous_btn_work_history').click(function(){
		next_section('#list_work_history','#list_personal_info','#work_history','#personal_info');
	});

	/**************** EDUCATION **********************************/

	$('#btn_education').click(function() {
		next_section('#list_education','#list_skills','#education','#skills');
		
		var edu_list_0 = [];
		$('#editor_edu_0').children('li').each(function () {
			edu_list_0.push($(this).text());
		});
		let eduListValue_0 = edu_list_0.join('_-_');
		$('#edu_list_0').val(eduListValue_0);

		var edu_list_1 = [];
		$('#editor_edu_1').children('li').each(function () {
			edu_list_1.push($(this).text());
		});
		let eduListValue_1 = edu_list_1.join('_-_');
		$('#edu_list_1').val(eduListValue_1);

		var edu_list_2 = [];
		$('#editor_edu_2').children('li').each(function () {
			edu_list_2.push($(this).text());
		});
		let eduListValue_2 = edu_list_2.join('_-_');
		$('#edu_list_2').val(eduListValue_2);

		var edu_list_3 = [];
		$('#editor_edu_3').children('li').each(function () {
			edu_list_3.push($(this).text());
		});
		let eduListValue_3 = edu_list_3.join('_-_');
		$('#edu_list_3').val(eduListValue_3);

		var edu_list_4 = [];
		$('#editor_edu_4').children('li').each(function () {
			edu_list_4.push($(this).text());
		});
		let eduListValue_4 = edu_list_4.join('_-_');
		$('#edu_list_4').val(eduListValue_4);
		
		
	});

	$('#previous_btn_education').click(function(){
		next_section('#list_education','#list_work_history','#education','#work_history');
	});

	$('#btn_skills').click(function() {
		next_section('#list_skills','#list_summary','#skills','#summary');
	});

	$('#previous_btn_skills').click(function() {
		next_section('#list_skills','#list_education','#skills','#education');
	});

	

	$('#previous_btn_summary').click(function() {
		next_section('#list_summary','#list_skills','#summary','#skills');
	});
	
	/*********** WORK INPUTS ***********/
	/*********** WORK INPUTS ***********/
	$('.multi-field-wrapper-work').each(function() {
		var $wrapper = $('.multi-fields', this);
		$('.multi-field .remove-work-field', $wrapper).click(function() {
			if ($('.multi-field', $wrapper).length > 1)
			$(this).parent().parent('.multi-field').remove();
		});
		$('.multi-field .work_current_input', $wrapper).change(function() {
			if( $(this).is(":checked") ){ // check if the radio is checked
				$(this).parent().parent().parent().find('.end_date_input').val('');
				$(this).parent().parent().parent().find('.end_date_input').attr('disabled', true);
			} else {
				$(this).parent().parent().parent().find('.end_date_input').attr('disabled', false);
			}
		});
		$(".add-field", $(this)).click(function(e) {
			$('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();

			var last = $('.multi-field:last');
			var current =  $(".multi-field").length - 1;
			
			last.find('input').val([]);
			last.find('input.job_title_input').attr("name", "job_title_" + current);
			last.find('input.employer_input').attr("name", "employer_" + current);
			last.find('input.work_city_input').attr("name", "work_city_" + current);
			last.find('input.work_state_input').attr("name", "work_state_" + current);
			last.find('input.start_date_input').attr("name", "start_date_" + current);
			last.find('input.start_date_input').attr("id", "start_date_" + current);
			last.find('div.start_date').attr("id", "datetimepicker_start_" + current);
			last.find('input.end_date_input').attr("name", "end_date_" + current);
			last.find('div.end_date').attr("id", "datetimepicker_end_" + current);
			last.find('input.end_date_input').attr("id", "end_date_" + current);
			last.find('input.work_current_input').attr("name", "work_current_" + current);
			last.find('input.work_current_input').attr("id", "work_current_" + current);
			last.find('input.work_list_input').attr("name", "work_list_" + current);
			last.find('input.work_list_input').attr("id", "work_list_" + current);
			last.find('ul.editor_input').attr("id", "editor_" + current);
			last.find('ul.works_db').attr("id", "works_db_" + current);
			
	
		/*$('#datetimepicker_start_1').datetimepicker({format: 'MM/YYYY' ,  maxDate: new Date() });
		$('#datetimepicker_end_1').datetimepicker({maxDate: new Date(),format: 'MM/YYYY',useCurrent: false});
		$("#datetimepicker_start_1").on("dp.change", function (e) {$('#datetimepicker_end_1').data("DateTimePicker").minDate(e.date);});
		$("#datetimepicker_end_1").on("dp.change", function (e) {$('#datetimepicker_start_1').data("DateTimePicker").maxDate(e.date);});
		*/

			
		});
	});
	$('.multi-field-wrapper-edu').each(function() {
		var $wrapper = $('.multi-fields-edu', this);
		$('.multi-field-edu .remove-edu-field', $wrapper).click(function() {
			if ($('.multi-field-edu', $wrapper).length > 1)
			$(this).parent().parent('.multi-field-edu').remove();
		});
		$('.multi-field-edu .work_current_edu_input', $wrapper).change(function() {
			if( $(this).is(":checked") ){ // check if the radio is checked
				$(this).parent().parent().parent().find('.end_date_edu_input').val('');
				$(this).parent().parent().parent().find('.end_date_edu_input').attr('disabled', true);
			} else {
				$(this).parent().parent().parent().find('.end_date_edu_input').attr('disabled', false);
			}
		});
		$(".add-field-edu", $(this)).click(function(e) {
			$('.multi-field-edu:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
			

			var last = $('.multi-field-edu:last');
			var current =  $(".multi-field-edu").length - 1;
			
			last.find('input').val([]);
			last.find('input.education_university_input').attr("name", "education_university_" + current);
			last.find('input.education_university_input').attr("id", "education_university_" + current);
			last.find('input.education_university_location_input').attr("name", "education_university_location_" + current);
			last.find('input.education_university_location_input').attr("id", "education_university_location_" + current);
			last.find('input.education_university_degree_input').attr("name", "education_university_degree_" + current);
			last.find('input.education_university_degree_input').attr("id", "education_university_degree_" + current);
			last.find('input.start_date_edu_input').attr("name", "start_date_edu_" + current);
			last.find('input.start_date_edu_input').attr("id", "start_date_edu_" + current);
			last.find('input.end_date_edu_input').attr("name", "end_date_edu_" + current);
			last.find('div.end_date_edu_input').attr("id", "end_date_edu_" + current);
			last.find('input.work_current_edu_input').attr("name", "work_current_edu_" + current);
			last.find('input.work_current_edu_input').attr("id", "work_current_edu_" + current);
			last.find('div.work_current_edu_input').attr("id", "work_current_edu_" + current);
		
			
		});
	});
	/***************** SKILLS ****************/
	$('.multi-field-wrapper-skills').each(function() {
		var $wrapper = $('.multi-fields-skills', this);
		$('.multi-field-skill .remove-skill-field', $wrapper).click(function() {
			if ($('.multi-field-skill', $wrapper).length > 1)
			$(this).parent('.multi-field-skill').remove();
		});
		
		$(".add-skill-field", $(this)).click(function(e) {
			$('.multi-field-skill:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
			

			var last = $('.multi-field-skill:last');
			var current =  $(".multi-field-skill").length - 1;
			
			last.find('input').val([]);
			last.find('input.skill_input').attr("name", "skill_" + current);
			
		
			
		});
	});
	$('.multi-field-wrapper-cert').each(function() {
		var $wrapper = $('.multi-fields-cert', this);
		$('.multi-field-cert .remove-cert-field', $wrapper).click(function() {
			if ($('.multi-field-cert', $wrapper).length > 1)
			$(this).parent('.multi-field-cert').remove();
		});
		
		$(".add-field-cert", $(this)).click(function(e) {
			$('.multi-field-cert:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
			

			var last = $('.multi-field-cert:last');
			var current =  $(".multi-field-cert").length - 1;
			
			last.find('input').val([]);
			last.find('input.date_cert_input').attr("name", "date_cert_" + current);
			last.find('input.date_cert_input').attr("id", "date_cert_" + current);
			last.find('input.name_cert_input').attr("name", "name_cert_" + current);
			last.find('input.name_cert_input').attr("id", "name_cert_" + current);
			
			
		});
	});
	/*$('#skills_db').each(function() {
		$(this).click(function() {
			alert ($(this).html());
		});
		
	});*/

	$('#skills_db li').bind('click' , function() {
		var id = $('#skills_db li').index(this) + 1;
		var skill_id = '#skill_' + id;
		var txt = $(skill_id).find('a').html();
		var $wrapper = $('.multi-fields-skills', '.multi-field-wrapper-skills');
		$('.multi-field-skill:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
			

			var last = $('.multi-field-skill:last');
			var current =  $(".multi-field-skill").length - 1;
			
			last.find('input').val(txt);
			last.find('input.skill_input').attr("name", "skill_" + current);
	});
	/***** COPY item  ***********/
	$('.help_list_item').click(function() {
		var copyText = $(this).children('p').text();
		var tempElement = $('<input>').val(copyText).appendTo('body').select();
		document.execCommand("copy");
		tempElement.remove();
		$('.copy-check').show().delay(3000).fadeOut();
	});
	$('.summary_list_db div p').bind('click', function(){
		var txt = $(this).text();
		$('#summary_area').text(txt);
	});
	
	
	/*********************** BTN SUBMIT *************************/
	$('#btn_summary').bind('click', function (event) {
		var url = window.location.href;
		var id = url.split('?temp=').pop();
		// using this page stop being refreshing 
        event.preventDefault();
			$.ajax({
				type: 'POST',
				url: 'post.php',
				data: $('form').serialize(),
				success: function (data) {
					window.location.href = "download.php?temp=" + id;
					//alert(data);
				}
			});
	});
	
	$('#downloadResume').click(function () {
			
		window.scrollTo(0,0);
		html2canvas(document.getElementById('resume'),{scale:2},{useCORS:true},{width: 794},{height:1123}).then(function(canvas) {
		  document.body.appendChild(canvas);
		  
		let wid;
		let hgt;
		let img = canvas.toDataURL("image/jpg", wid = canvas.width, hgt = canvas.height);
		let hratio = hgt/wid
		let doc = new jsPDF('p','pt','a4');
		let width = doc.internal.pageSize.width;    
		let height = width * hratio;
		console.log(height);
		doc.addImage(img,'jpg',0,0, width, height);
		doc.save('Test.pdf');

		});
	});
});    