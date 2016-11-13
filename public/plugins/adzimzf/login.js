$(function () {
	$("#show-pass").click(function(event) {
		var clas= $("#show-pass li").attr('class');
		if (clas == "fa fa-eye") {
			$("#password").attr('type', 'text');
			$("#show-pass li").attr('class', 'fa fa-eye-slash');
		}else{
			$("#password").attr('type', 'password');
			$("#show-pass li").attr('class', 'fa fa-eye');
		}
	});
});