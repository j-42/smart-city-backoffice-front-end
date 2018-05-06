<ul>
	<li>
		<a id="users-all" class="active" href="">Tous les abonnés</a>
	</li>

	<li>
		<a id="users-active" href="">Abonnés actifs</a>
	</li>

	<li>
		<a id="users-inactive" href="">Abonnés inactifs</a>
	</li>

	<li>
		<a id="users-android" href="">Abonnés Andoid</a>
	</li>

	<li>
		<a id="users-apple" href="">Abonnés Apple</a>
	</li>
</ul>

<script>


	

	$('#users-all').click(function(e){
		e.preventDefault();
		$('.sub-content').load("modules/users-all.php");
		$('.subnav li a').removeClass('active');
		$(this).addClass('active');
	});

	$('#users-active').click(function(e){
		e.preventDefault();
		$('.sub-content').load("modules/users-active.php");
		$('.subnav li a').removeClass('active');
		$(this).addClass('active');
	});

	$('#users-inactive').click(function(e){
		e.preventDefault();
		$('.sub-content').load("modules/users-inactive.php");
		$('.subnav li a').removeClass('active');
		$(this).addClass('active');
	});
	
	$('#users-android').click(function(e){
		e.preventDefault();
		$('.sub-content').load("modules/users-android.php");
		$('.subnav li a').removeClass('active');
		$(this).parent().addClass('active');
		$(this).next().children().toggle(500);
	});


	$('#users-apple').click(function(e){
		e.preventDefault();
		$('.sub-content').load("modules/users-apple.php");
		$('.subnav li a').removeClass('active');
		$(this).addClass('active');
	});


</script>