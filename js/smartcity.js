$(function(){

	$('#dashboard').click(function(e){
		e.preventDefault();
		$('.subnav').hide();
		$('.sub-content').load("views/dashboard.php");
		$('nav li').removeClass('active');
	});

	$('#modules').click(function(e){
		e.preventDefault();
		$('.subnav').show().load("views/mes-modules-subnav.php");
		$('.sub-content').show().load("views/mes-modules.php");
		$('nav li').removeClass('active');
		$(this).parent().addClass('active');
	});

	$('#add-modules').click(function(e){
		e.preventDefault();
		$('.subnav').hide();
		$('.sub-content').show().load("views/add-modules.php");
		$('nav li').removeClass('active');
		$(this).parent().addClass('active');
	});

	$('#users').click(function(e){
		e.preventDefault();
		$('.subnav').show().load("views/users-subnav.php");
		$('.sub-content').show().load("views/users.php");
		$('nav li').removeClass('active');
		$(this).parent().addClass('active');
	});

	$('#settings').click(function(e){
		e.preventDefault();
		$('.subnav').hide();
		$('.sub-content').show().load("views/settings.php");
		$('nav li').removeClass('active');
		$(this).parent().addClass('active');
	});

	$('#log').click(function(e){
		e.preventDefault();
		$('.subnav').hide();
		$('.sub-content').hide();
		$(".popup-container").show().load("views/log.php");
		$('nav li').removeClass('active');
		$(this).parent().addClass('active');
	});

	$('#dashboard').trigger('click');
	
/*	POPUP	
		$(".popup-container").load('modules/popup.php');
*/


});