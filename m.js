function make_json(form){
		var json = {
			"name": form.name.value,
			"email": form.email.value,
			"password": form.pass.value,
			"dob": form.dob.value,
			"degree": form.deg.value,
			"skills": form.tec.value,
			"address": form.add.value,
		
		};
	var html = JSON.stringify(json, 0,7);
		
	document.getElementById('output').innerHTML = html;
	
	$.post('data.php',{'json':html} );
		
	return false
	}