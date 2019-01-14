/*
Toggle the forms in contact page when green buttons are clicked.
preventDefault is needed because any button trigger the action of the form.
*/
$(document).ready(function() {
	document.getElementById("signup").addEventListener("click", function(event){
	  	event.preventDefault();
	});
	document.getElementById("login").addEventListener("click", function(event){
	  	event.preventDefault();
	});
	$("#signup, #login").click(function() {
		$("#signupform, #loginform").toggle();
	});
});