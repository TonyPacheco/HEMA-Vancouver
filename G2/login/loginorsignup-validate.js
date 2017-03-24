function checkLogPassword() {
	var input = document.getElementById("logpassword").value;
	var password = document.getElementById("logpassword");
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

function checkRegPassword() {
	var input = document.getElementById("regpassword").value;
	var password = document.getElementById("regpassword");
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

function checkConfEmail() {
	var confemail = document.getElementById("confemail");
	var email = document.getElementById("regemail");

	if(confemail.value != email.value)
	{
		confemail.setCustomValidity("Emails don't match.");
		return false;
	} else {
		confemail.setCustomValidity("");
		return true;
	}
}

function checkConfPassword() {
	var confpass = document.getElementById("confpassword");
	var pass = document.getElementById("regpassword");

	if(confpass.value != pass.value)
	{
		confpass.setCustomValidity("Passwords don't match.");
		return false;
	} else {
		confpass.setCustomValidity("");
		return true;
	}
}

document.getElementById("logpassword").onchange = checkLogPassword;
document.getElementById("regpassword").onchange = checkRegPassword;
document.getElementById("confpassword").onchange = checkConfPassword;
document.getElementById("confemail").onchange = checkConfEmail;

$(document).ready(function() {

$('.masterTooltip').hover(function(){ 
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
        var mousex = e.pageX + 20; //Get X coordinates
        var mousey = e.pageY + 10; //Get Y coordinates
        $('.tooltip')
        .css({ top: mousey, left: mousex })
});
});