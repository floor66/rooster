$(document).ready(function() {
	$(".autojump").keyup(function(e) {
		var kc = e.keyCode || e.which;
		
		if(kc != "9" && kc != "16") {
			if($(this).val().length >= 2) {
				$("#"+ $(this).data("next")).focus();
			}
		}
	});
});