<ul>
	<li>
		<a id="module-actualites" class="active" href="">Module actualités</a>
	</li>

	<li>
		<a id="module-agenda" href="">Module agenda</a>
	</li>

	<li>
		<a id="module-liste-des-elus" href="">Module liste des élus</a>
	</li>

	<li>
		<a id="module-informations-pratiques" href="">Module informations pratiques</a>

		<ul>
			<li>
				<a id="module-informations-pratiques-info-mairie" href="">Infos Mairie</a>
			</li>
			<li>
				<a id="module-informations-pratiques-demarches-administratives" href="">Démarches administratives</a>
			</li>
			<li>
				<a id="module-informations-pratiques-gestion-des-dechets" href="">Gestion des déchets</a>
			</li>
			<li>
				<a id="module-informations-pratiques-culture" href="">Culture</a>
			</li>
			<li>
				<a id="module-informations-pratiques-urgences" href="">Urgences</a>
			</li>
		</ul>
	</li>
	
	<li>
		<a id="module-menus-scolaires" href="">Module menus scolaires</a>

		<ul>
			<li>
				<a id="module-menus-scolaires-maternelle" href="">Maternelle</a>
			</li>
			<li>
				<a id="module-menus-scolaires-primaire" href="">Primaire</a>
			</li>
			<li>
				<a id="module-menus-scolaires-college" href="">College</a>
			</li>
		</ul>
	</li>

	<li>
		<a id="module-sondages" href="">Module Sondages</a>
	</li>

	<li>
		<a id="module-signalement" href="">Module Signalement</a>
	</li>

	<li>
		<a id="module-systeme-d-alerte" href="">Module système d'alerte</a>
	</li>
</ul>


<script>


	

	$('#module-actualites').click(function(e){
		e.preventDefault();
		$('.sub-content').load("modules/module-actualites.php");
		$('.subnav li a').removeClass('active');
		$(this).addClass('active');
	});

	$('#module-agenda').click(function(e){
		e.preventDefault();
		$('.sub-content').load("modules/module-agenda.php");
		$('.subnav li a').removeClass('active');
		$(this).addClass('active');
	});

	$('#module-liste-des-elus').click(function(e){
		e.preventDefault();
		$('.sub-content').load("modules/module-liste-des-elus.php");
		$('.subnav li a').removeClass('active');
		$(this).addClass('active');
	});
	
	$('#module-informations-pratiques').click(function(e){
		e.preventDefault();
		$('.sub-content').load("modules/module-informations-pratiques.php");
		$('.subnav li a').removeClass('active');
		$(this).parent().addClass('active');
		$(this).next().children().toggle(300);
	});
		
				$('#module-informations-pratiques-info-mairie').click(function(e){
					e.preventDefault();
					$('.sub-content').load("modules/module-informations-pratiques-info-mairie.php");
					$('.subnav li a').removeClass('active');
					$(this).addClass('active');
				});

				$('#module-informations-pratiques-demarches-administratives').click(function(e){
					e.preventDefault();
					$('.sub-content').load("modules/module-informations-pratiques-demarches-administratives.php");
					$('.subnav li a').removeClass('active');
					$(this).addClass('active');
				});

				$('#module-informations-pratiques-gestion-des-dechets').click(function(e){
					e.preventDefault();
					$('.sub-content').load("modules/module-informations-pratiques-gestion-des-dechets.php");
					$('.subnav li a').removeClass('active');
					$(this).addClass('active');
				});

				$('#module-informations-pratiques-culture').click(function(e){
					e.preventDefault();
					$('.sub-content').load("modules/module-informations-pratiques-culture.php");
					$('.subnav li a').removeClass('active');
					$(this).addClass('active');
				});

				$('#module-informations-pratiques-urgences').click(function(e){
					e.preventDefault();
					$('.sub-content').load("modules/module-informations-pratiques-urgences.php");
					$('.subnav li a').removeClass('active');
					$(this).addClass('active');
				});


	$('#module-sondages').click(function(e){
		e.preventDefault();
		$('.sub-content').load("modules/module-sondages.php");
		$('.subnav li a').removeClass('active');
		$(this).addClass('active');
	});



	$('#module-menus-scolaires').click(function(e){
		e.preventDefault();
		$('.sub-content').load("modules/module-menus-scolaires.php");
		$('.subnav li a').removeClass('active');
		$(this).parent().addClass('active');
		$(this).next().children().toggle(300);
	});
				$('#module-menus-scolaires-maternelle').click(function(e){
					e.preventDefault();
					$('.sub-content').load("modules/module-menus-scolaires-maternelle.php");
					$('.subnav li a').removeClass('active');
					$(this).addClass('active');
				});
				
				$('#module-menus-scolaires-primaire').click(function(e){
					e.preventDefault();
					$('.sub-content').load("modules/module-menus-scolaires-primaire.php");
					$('.subnav li a').removeClass('active');
					$(this).addClass('active');
				});

				$('#module-menus-scolaires-college').click(function(e){
					e.preventDefault();
					$('.sub-content').load("modules/module-menus-scolaires-college.php");
					$('.subnav li a').removeClass('active');
					$(this).addClass('active');
				});
				


	$('#module-signalement').click(function(e){
		e.preventDefault();
		$('.sub-content').load("modules/module-signalement.php");
		$('.subnav li a').removeClass('active');
		$(this).addClass('active');
	});

	$('#module-systeme-d-alerte').click(function(e){
		e.preventDefault();
		$('.sub-content').load("modules/module-systeme-d-alerte.php");
		$('.subnav li a').removeClass('active');
		$(this).addClass('active');
	});


	$('#module-actualites').trigger('click');

</script>

