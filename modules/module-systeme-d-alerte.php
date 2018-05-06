	<section class="bloc2">
		<h4>Envoyer une nouvelle alerte</h4>

		<article>
			<form action="">
				<div class="row">
					<p class="stay-strong">Titre <span>(18 caractères max.)</span></p>
					<input name="titre" type="text">
				</div>

				<div class="row texte">
					<p class="stay-strong">Text <span>(145 caractères max.)</span></p>
					<textarea name="texte" rows="10" cols="50"></textarea>
				</div>

				<div class="row flex-right">
					<svg class="italic" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"> <path d="M0 0h24v24H0z" fill="none"/><path d="M10 4v3h2.21l-3.42 8H6v3h8v-3h-2.21l3.42-8H18V4z"/></svg>
					<svg class="bold" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M15.6 10.79c.97-.67 1.65-1.77 1.65-2.79 0-2.26-1.75-4-4-4H7v14h7.04c2.09 0 3.71-1.7 3.71-3.79 0-1.52-.86-2.82-2.15-3.42zM10 6.5h3c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-3v-3zm3.5 9H10v-3h3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					<svg class="underline" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17c3.31 0 6-2.69 6-6V3h-2.5v8c0 1.93-1.57 3.5-3.5 3.5S8.5 12.93 8.5 11V3H6v8c0 3.31 2.69 6 6 6zm-7 2v2h14v-2H5z"/></svg>
					<svg class="links" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/></svg>
				</div>

				<div class="row options">
					<p class="stay-strong">Type d'alerte associé</p>
					<div><p>Actualité</p><svg class="icon" height="18" width="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/><path d="M0-.75h24v24H0z" fill="none"/></svg></div>
				</div>
				
					

				<div class="row submit frozen">
					<button class="program">Enregistrer et programmer la publication</button>
					<button class="publish">Publier maintenant</button>
				</div>

			</form>
		</article>
	</section>





	<section class="bloc3" id="mes-modules-progra">
		<h4>Alertes déja envoyées</h4>

		<article>
			<div class="row titre">
				<p>Chamb'art 2015</p>
			</div>

			<div class="row titre">
				<p>La compagni Le p'tit vélo est une fanfare déjanto punck root motoriée qui vous transportera dans un univers de partage et de voyages...</p>
			</div>

			<div class="row rattachement">
				<ul>Rattachement :
					<li>Actualité</li>
					<li>Festival Chamb'art</li>
				</ul>
			</div>

			<div class="row summary flex-right">
				<p>Publiée le <?php echo date("d/m/Y");?> à <?php echo date("H:i");?></p>
			</div>

		</article>
	</section>












<script>
	$( "#datepicker" ).datepicker({
		closeText: 'Fermer',
	    prevText: '&#x3c;PrÃ©c',
	    nextText: 'Suiv&#x3e;',
	    currentText: 'Aujourd\'hui',
	    monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
	    'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
	    monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
	    'Jul','Aou','Sep','Oct','Nov','Dec'],
	    dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
	    dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
	    dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
	    weekHeader: 'Sm',
	    dateFormat: 'dd-mm-yy',
	    firstDay: 1,
	    isRTL: false,
	    showMonthAfterYear: false,
	    yearSuffix: '',
	    maxDate: '+12M +0D',
	    numberOfMonths: 1,
	    showButtonPanel: false,
	});


	$('.program').click(function(e){
		e.preventDefault();
		$(".popup").load('../modules/popup.php');
	});

</script>