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
    
    /*var items = [];
    items.push('dsa');
    
    items.push('sd');
    alert(items);*/
    $('.item').click(function() {
        if($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).children('.checkbox_item').attr("checked", false);
        } else {
            $(this).addClass('active');
            $(this).children('.checkbox_item').attr("checked", true);
        }
    });
    
	/************** personal_info *****************/
	
	$("#btnSubmit").click(function () {
        
		$('.overlay_success').css('opacity', '1').css('visibility','visible');
			$('body').css('overflow','hidden');
			$('.success_content p').text('Thank You for your opinion');
			$('.success_content a').attr('href', 'http://aichesusc.org/aiche-blog-home-page/');
			$('.success_content a').text('Visit Our Blog');
			window.setTimeout(function () {
				window.location.href = 'http://aichesusc.org/aiche-blog-home-page/';
			}, 5000);
		$(this).prop('disabled', true);
		
        var formData = new FormData($('#formID')[0]);
            
		$.ajax({
			url: 'form.php',
			type: 'POST',
			data: formData,
			async: false,
			success: function (myData) {
			   // alert(myData);	
			},
			cache: false,
			contentType: false,
			processData: false
		});
        
    
    });


});