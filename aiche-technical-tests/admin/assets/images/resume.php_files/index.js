$(function () {
    'use strict'; 
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
			} else {
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if (!filter.test($(id).val())) {
					error_var = 'Invalid Email';
					$(error_id).text(error_var);
					$(id).addClass('has-error');
					$(id).next('.success').css('opacity', 0);
				} else {
					error_var = '';
					$(error_id).text(error_var);
					$(id).removeClass('has-error');
					$(id).next('.success').css('opacity', 1);
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
				} else {
					error_var = '';
					$(error_id).text(error_var);
					$(id).removeClass('has-error');
					$(id).next('.success').css('opacity', 1);
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
    

    	$('#list_personal_info').click(function() {
    		/*let error_fname = $('#error_fname').is(':empty');
	    	let error_lname = $('#error_lname').is(':empty');
	    	let error_address = $('#error_address').is(':empty');
	    	let error_phone = $('#error_phone').is(':empty');
	    	let error_email = $('#error_email').is(':empty');

	    	let fname = $.trim($('#fname').val()).length;
	    	let lname = $.trim($('#lname').val()).length;
	    	let address = $.trim($('#address').val()).length;
	    	let phone = $.trim($('#phone').val()).length;
	    	let email = $.trim($('#email').val()).length;

	    	if (!error_fname || !error_lname || !error_address || !error_email || !error_phone) {
	    		$('.error_personal_info').show();
	    		$('#error_personal_info').text('Check the data you entered');
	    	} else if (fname == 0 || lname == 0 || address == 0 ||  phone == 0 || email == 0) {
	    		$('.error_personal_info').show();
	    		$('#error_personal_info').text('please enter the required fields to be able to continue!');
	    	} else {
	    		if($(this).hasClass('completed')) {
					$(this).addClass('active');
					$('#list_work_history').removeClass('active');
					$('#list_education').removeClass('active');
					$('#list_skills').removeClass('active');
					$('#list_summary').removeClass('active');


					$('#personal_info').addClass('active in');
					$('#work_history').removeClass('active');
					$('#education').removeClass('active');
					$('#skills').removeClass('active');
					$('#summary').removeClass('active');
					$('personal_info').addClass('active in');
				}
	    	}*/

			if($(this).hasClass('completed')) {
				$(this).addClass('active');
				$('#list_work_history').removeClass('active');
				$('#list_education').removeClass('active');
				$('#list_skills').removeClass('active');
				$('#list_summary').removeClass('active');


				$('#personal_info').addClass('active in');
				$('#work_history').removeClass('active');
				$('#education').removeClass('active');
				$('#skills').removeClass('active');
				$('#summary').removeClass('active');
				$('personal_info').addClass('active in');
			}
		});
		$('#list_work_history').click(function() {
			/*if($(this).hasClass('completed')) {
				$(this).addClass('active');
				$('#list_personal_info').removeClass('active');
				$('#list_education').removeClass('active');
				$('#list_skills').removeClass('active');
				$('#list_summary').removeClass('active');

				$('#personal_info').removeClass('active in');
				$('#work_history').addClass('active');
				$('#education').removeClass('active');
				$('#skills').removeClass('active');
				$('#summary').removeClass('active');
			}*/
			let error_fname = $('#error_fname').is(':empty');
	    	let error_lname = $('#error_lname').is(':empty');
	    	let error_address = $('#error_address').is(':empty');
	    	let error_phone = $('#error_phone').is(':empty');
	    	let error_email = $('#error_email').is(':empty');

	    	let fname = $.trim($('#fname').val()).length;
	    	let lname = $.trim($('#lname').val()).length;
	    	let address = $.trim($('#address').val()).length;
	    	let phone = $.trim($('#phone').val()).length;
	    	let email = $.trim($('#email').val()).length;

	    	if (!error_fname || !error_lname || !error_address || !error_email || !error_phone) {
	    		$('.error_personal_info').show();
	    		$('#error_personal_info').text('Check the data you entered');
	    	} else if (fname == 0 || lname == 0 || address == 0 ||  phone == 0 || email == 0) {
	    		$('.error_personal_info').show();
	    		$('#error_personal_info').text('please enter the required fields to be able to continue!');
	    	} else {
	    		if($(this).hasClass('completed')) {
					$(this).addClass('active');
					$('#list_personal_info').removeClass('active');
					$('#list_education').removeClass('active');
					$('#list_skills').removeClass('active');
					$('#list_summary').removeClass('active');

					$('#personal_info').removeClass('active in');
					$('#work_history').addClass('active');
					$('#education').removeClass('active');
					$('#skills').removeClass('active');
					$('#summary').removeClass('active');
				}
	    	}
		});
		$('#list_education').click(function() {
			if($(this).hasClass('completed')) {
				$(this).addClass('active');
				$('#list_work_history').removeClass('active');
				$('#list_personal_info').removeClass('active');
				$('#list_skills').removeClass('active');
				$('#list_summary').removeClass('active');

				$('#personal_info').removeClass('active in');
				$('#work_history').removeClass('active');
				$('#education').addClass('active');
				$('#skills').removeClass('active');
				$('#summary').removeClass('active');
			}
		});
		$('#list_skills').click(function() {
			if($(this).hasClass('completed')) {
				$(this).addClass('active');
				$('#list_work_history').removeClass('active');
				$('#list_personal_info').removeClass('active');
				$('#list_education').removeClass('active');
				$('#list_summary').removeClass('active');

				$('#personal_info').removeClass('active in');
				$('#work_history').removeClass('active');
				$('#education').removeClass('active');
				$('#skills').addClass('active');
				$('#summary').removeClass('active');
			}
		});
		$('#list_summary').click(function() {
			if($(this).hasClass('completed')) {
				$(this).addClass('active');
				$('#list_work_history').removeClass('active');
				$('#list_personal_info').removeClass('active');
				$('#list_education').removeClass('active');
				$('#list_skills').removeClass('active');

				$('#personal_info').removeClass('active in');
				$('#work_history').removeClass('active');
				$('#education').removeClass('active');
				$('#skills').removeClass('active');
				$('#summary').addClass('active');
			}
		});
		/*$('#list_personal_info').click(function() {
			if($(this).hasClass('completed')) {
				next_section('#list_work_history','#list_personal_info','#work_history','#personal_info');
			}
		});*/
    

	/********** Personal info *************/
	
	if ($('#list_personal_info').is(":visible")) {
		text_check_empty('#fname','#error_fname',error_fname,'first name is required');
		text_check_empty('#lname','#error_lname',error_lname,'Last name is required');
		text_check_empty('#address','#error_address',error_address,'Address is required');
		text_check_phone('#phone','#error_phone',error_phone);
		text_check_email('#email','#error_email',error_email);
	}
	
    $('#btn_personal_info').click(function(){
  		let error_fname = $('#error_fname').is(':empty');
    	let error_lname = $('#error_lname').is(':empty');
    	let error_address = $('#error_address').is(':empty');
    	let error_phone = $('#error_phone').is(':empty');
    	let error_email = $('#error_email').is(':empty');

    	let fname = $.trim($('#fname').val()).length;
    	let lname = $.trim($('#lname').val()).length;
    	let address = $.trim($('#address').val()).length;
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
	
	$('#datetimepicker6').datetimepicker({format: 'DD/MM/YYYY' ,  maxDate: new Date() });
        $('#datetimepicker7').datetimepicker({
			maxDate: new Date(),
			format: 'DD/MM/YYYY',
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
	/*************** WORK HISTORY ******************/
	/*if ($('#list_work_history').is(":visible")) {
		text_check_empty('#job_title','#error_job_title',error_job_title,'Job Title is required');
		text_check_empty('#employer','#error_employer',error_employer,'Employer is required');
		text_check_empty('#work_city','#error_work_city',error_work_city,'City is required');
		text_check_empty('#work_state','#error_work_state',error_work_state,'State is required');
	}*/
	$('input[name="work_current"]') // select the radio by its id
	.change(function(){ // bind a function to the change event
		if( $(this).is(":checked") ){ // check if the radio is checked
			$('#end_date').val("");
			$('#end_date').attr('disabled', true);
		} else {
			$('#end_date').attr('disabled', false);
		}
	});
	$('#btn_work_history').click(function() {
		/*let error_job_title = $('#error_job_title').is(':empty');
		let error_employer = $('#error_employer').is(':empty');
	
		let job_title = $.trim($('#job_title').val()).length;
		let employer = $.trim($('#employer').val()).length;
	
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
		} else if (!error_job_title || !error_employer) {
			$('.error_work_history').show();
			$('#error_work_history').text('Check the data you entered');
		} else{
			next_section('#list_work_history','#list_education','#work_history','#education');
		}*/
		var work_list = [];
		$('#editor').children('li').each(function () {
			work_list.push($(this).text());
		});
		let workListValue = work_list.join('_-_');
		//alert(count);
		$('#work_list').val(workListValue);
		
	});

	
	$('#previous_btn_work_history').click(function(){
		next_section('#list_work_history','#list_personal_info','#work_history','#personal_info');
	});

	/**************** EDUCATION **********************************/
	if ($('#list_education').is(":visible")) {
		text_check_empty('#education_university','#error_education_university',error_education_university,'University is required');
		text_check_empty('#education_university_location','#error_education_university_location',error_education_university_location,'Location is required');
		text_check_empty('#education_university_degree','#error_education_university_degree',error_education_university_degree,'Degree is required');
	}
	$('#btn_education').click(function() {
		let error_education_university = $('#error_education_university').is(':empty');
		let error_education_university_location = $('#error_education_university_location').is(':empty');
		let error_education_university_degree = $('#error_education_university_degree').is(':empty');

		let education_university = $.trim($('#education_university').val()).length;
		let education_university_location = $.trim($('#education_university_location').val()).length;
		let education_university_degree = $.trim($('#education_university_degree').val()).length;

		if (!error_education_university || !error_education_university_location || !error_education_university_degree) {
    		$('.error_education').show();
    		$('#error_education').text('Check the data you entered');
    	} else if (education_university == 0 || education_university_location == 0 || education_university_degree == 0) {
    		$('.error_education').show();
    		$('#error_education').text('please enter the required fields to be able to continue!');
    	} else {
    		next_section('#list_education','#list_skills','#education','#skills');
    	}
	});

	$('#previous_btn_education').click(function(){
		next_section('#list_education','#list_work_history','#education','#work_history');
	});

	/***************** SKILLS AND LANGUAGES ***************/
	$('#btn_skills').click(function() {
		next_section('#list_skills','#list_summary','#skills','#summary');
	});
	$('#previous_btn_skills').click(function(){
		next_section('#list_skills','#list_education','#skills','#education');
	});

	/******************* SUMMARY ***********************/
	/*$('#btn_summary').click(function() {
		next_section('#list_summary','#list_skills','#summary','#skills');
	});*/
	$('#previous_btn_summary').click(function(){
		next_section('#list_summary','#list_skills','#summary','#skills');
	});

	/******************* SKILL PHP ************************/
	/*$('#search_skill').keyup(function() {
		var search = $(this).val();
		$.ajax({
			url: 'skill.php',
			method: 'post',
			data:{query:search},
			success: function(response) {
				alert(response);
			}
		});
	});*/

	
	/************************** SKILLL ADD **********************/
	/*$('#skill_1').on('click','a',function (){
		alert($("#skill_1").find('a').text());
	});*/
	$('#skills_db li a').bind('click' , function() {
		var id = $('#skills_db li a').index(this) + 1;
		var skill_id = '#skill_' + id;
		var txt = $(skill_id).find('a').text();
		
		if (!$(skill_id + ' a').hasClass('skill-added')) {
			var $wrapper = $('.multi-fields', '.multi-field-wrapper');
			$('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
			var last = $('.multi-field:last');
			var current =  $(".multi-field").length - 1;
			last.find('input').val([]);
			last.find('input.skill_input').attr("name", "skill_" + current);
			last.find('input.skill_input').val(txt);
			last.addClass('skill_list');
			last.attr('id', 'skill_' + id);

			$(skill_id + ' a').addClass('skill-added');


		} else {
			alert('aa');
		}
		
	});

	
	/*********** WORK INPUTS ***********/
	$('.multi-field-wrapper').each(function() {
		var $wrapper = $('.multi-fields', this);
		$(".add-field", $(this)).click(function(e) {
			$('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();

			var last = $('.multi-field:last');
			var current =  $(".multi-field").length - 1;
			
			last.find('input').val([]);
			last.find('input.skill_input').attr("name", "skill_" + current);


		});
	});
	/*********** SKILL INPUTS ***********/
	/*$('.multi-field-wrapper').each(function() {
		var $wrapper = $('.multi-fields', this);
		$(".add-field", $(this)).click(function(e) {
			$('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();

			var last = $('.multi-field:last');
			var current =  $(".multi-field").length - 1;
			console.log(current);
			
			last.find('input').val([]);
			last.find('input.skill_input').attr("name", "skill_" + current);


		});
		$('.multi-field .remove-field', $wrapper).click(function() {
			if ($('.multi-field', $wrapper).length > 1)
			$(this).parent('.multi-field').remove();
			if($(this).parent('.multi-field').hasClass('skill_list')) {
				var id ='#' + $(this).parent('.multi-field').attr('id');	
				$('#skills_db ' + id + ' a').removeClass('skill-added');
			}
		});
	});*/

	/*********************** BTN SUBMIT *************************/
	$('#btn_summary').bind('click', function (event) {
		
        // using this page stop being refreshing 
        event.preventDefault();

          $.ajax({
            type: 'POST',
            url: 'post.php',
            data: $('form').serialize(),
            success: function (data) {
				//window.location.href = "save_post.php";
				alert(data);
            }
          });
        });
	

		/*************RESUME */
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
			
		
		/*var target = document.getElementById('editor');
		var insertedNodes = [];
		var Observer = new MutationObserver(function(mutations) {
			mutations.forEach(function(mutation) {
				for(var i = 0; i < mutation.addedNodes.length; i++) {
					insertedNodes.push(mutation.addedNodes[i]);
				}
			});
		});
		Observer.observe(target, {
			childList: true,
			subtree:true
		});

		$('#works_db li a').bind('click' , function() {
			var id = $('#works_db li a').index(this) + 1;
			var work_id = '#work_' + id;
			var txt = $(work_id).find('a').html();
			if (!$(work_id + ' a').hasClass('skill-added')) {
				
				$("#editor").append('<li>' + txt + '</li>');
			} else {
			}			
		});
		  */
		/*const observer = new MutationObserver(subscriber);
		observer.observe(document.querySelector('ol[contenteditable]'), { childList: true });*/


});    