function checkRegPassword() {
	var input = 
	document.getElementById("register_password").value;
	var password = 
	document.getElementById("register_password");
	password.setCustomValidity("");

	var patt = /^[a-zA-Z0-9!@#%^&*_]{8,}$/;
	var chars = /^[a-zA-Z0-9!@#%^&*_]*$/;
	var cap = /[A-Z]+/;
	var num = /[0-9]+/;

	alert_string = "";
	var no_cap = false;
	var no_num = false;
	var too_short = false;
	var invalid_chars = false;

	if(input.length < 8) {
		too_short = true;
		alert_string = "Must be at least 8 characters long.\n"
	}

	if(input.search(chars) == -1) {
		invalid_chars = true;
		alert_string += "Invalid characters. (A-Z, a-z, 0-9, !@#%^&*_ are valid)\n"
	}

	if(input.search(cap) == -1) {
	    no_cap = true;
	    alert_string += "Must contain at least one capital letter.\n"
	}

	if(input.search(num) == -1) {
	    no_num = true;
	    alert_string += "Must contain at least one number."
	}

	if(no_cap || no_num || too_short || invalid_chars)
	{
		password.setCustomValidity(alert_string);
		return false;
	}
	else {
		password.setCustomValidity("");
		return true;
	}
}

function checkConfPassword() {
	var confpass = 
	document.getElementById("register_cpassword");
	var pass = document.getElementById("register_password");

	if(confpass.value != pass.value)
	{
		confpass.setCustomValidity("Passwords don't match.");
		return false;
	} else {
		confpass.setCustomValidity("");
		return true;
	}
}

document.getElementById("register_password").onchange = 
checkRegPassword;
document.getElementById("register_cpassword").onchange = 
checkConfPassword;

$(document).ready(function() {

	$('.tooltipwidget').hover(function(){ 
			var title = $(this).attr('title');
			$(this).data('tipText', title).removeAttr('title');
			$('<p class="tooltip"></p>')
			.text(title)
			.appendTo('body')
			.fadeIn('slow');
			
	}, function() {
			$(this).attr('title', $(this).data('tipText'));
			$('.tooltip').remove();
	}).mousemove(function(e) {
			var mousex = e.pageX + 20; 
			var mousey = e.pageY + 10; 
			$('.tooltip')
			.css({ top: mousey, left: mousex })
	});
});
