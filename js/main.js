jQuery(document).ready(function($){
	$('#optin_triger').click(function(){
		$(this).hide("slow");
	$('#optin_blog').addClass('active');
	$('#optin_blog').slideDown(1000);
	});
	$('#close_optin').click(function(){
		$('#optin_blog').hide("slow");
		$('#optin_triger').show("slow");
	});
});
