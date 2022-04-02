$(function () {
    'use strict'; 
    
	
	/*********** WORK INPUTS ***********/
	$('.multi-field-wrapper').each(function() {
		var $wrapper = $('.multi-fields', this);
		$(".add-field", $(this)).click(function(e) {
			$('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();

			var last = $('.multi-field:last');
			var current =  $(".multi-field").length - 1;
			
			last.find('input').val([]);
			last.find('input.job_title_input').attr("name", "job_title_" + current);


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