//code to for no conflict
(function($){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
//setting up document	
$(document).ready(function(){
	var $j = jQuery.noConflict();	
	$j('#datepicker').datepicker();
	
	$('#savePersonalDetails').click(function(e){
		e.preventDefault();

	var dataString = {'studentphonenumber':$('#sphonenumber').val(),
				  'studentidnumber':$('#sidpp').val(),
				  'studentgender':$('#sgender').val(),
				  'studentbirthdate':$('#datepicker').val(),
				  'studentnationality':$('#snationality').val(),
				  'studentresidence':$('#sresidence').val(),
				  'studentpostalcode':$('#spcode').val(),
				  'studentpostaltown':$('#sptown').val(),
				  'studentreligion':$('#sreligion').val(),
				  'studentnextkin':$('#nextkin').val(),
				  'studentnextkinnumber':$('#nextkinnumber').val()
				  }
//posting personal details via ajax	
	$.ajax({
		type: 'POST',
		url: 'studentpersonaldetails',
		data: dataString,
		success: function(data){
			console.log(data);
			alert('Your personal details have been updated');
			$('#pdetails').remove();
		}
		
		
	});

});
		
		$('#saveAcademicDetails').click(function(e){
			e.preventDefault();
			
			var dataAcademic = {'studentcampus':$('#university').val(),
								'campusdepartment':$('#department').val(),
								'deptprogram':$('#program').val(),
								'studymode':$('#studymomde').val(),
								'sponsor':$('#sponsorname').val(),
								'emailsponsor':$('#sponsoremail').val(),
								'sponsortel':$('#sponsortelephone').val(),
								'sponsorcode':$('#sponsoraddress').val(),
								'postaltown':$('#sponsortown').val()
								}
		//posting academic details through ajax
			$.ajax({
			type: 'POST',
			url: 'studentacademicdetails',
			data : dataAcademic,
			success: function(data){
				console.log(data);
				alert('Academic details updated succesifully');
				$('#adetails').remove()
			}
			
			});
		});

		
		$('#saveEDetails').click(function(e){
		e.preventDefault();
		
		var formEData = new FormData();
		formEData.append('sschool',$('#secondary').val());
		formEData.append('secondarygrade',$('#secondarygrade').val());
		formEData.append('secondarycert',$('#secondarycert')[0].files[0]);
		formEData.append('pschool',$('#postsec').val());
		formEData.append('pschoolgrade',$('#postsecgrade').val());
		formEData.append('pschoolcert',$('#postseccert')[0].files[0]);
				  
		$.ajax({
		type: 'POST',
		url: 'studenteducationddetails',
		data: formEData,
		processData: false,
		contentType:false,
		success: function(data){
			console.log(data);
			alert('Education details updated succesifully');
			$('#edetails').remove()
		}
		});

	});
  });	
})(jQuery);

