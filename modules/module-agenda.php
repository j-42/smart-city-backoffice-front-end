	<section class="bloc2">
		

		<article>
			<h4>Publier un nouvel évènement</h4>
			<form action="">

				<div class="row calendar">
					<p>Date de publication</p>
					<div class="calendar-container">
						<form>
							<input type="text" placeholder="<?php echo date("d/m/Y");?>"> à <input type="text" placeholder="<?php echo date("H:i");?>">
						</form>
						<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					</div>
				</div>
					<!-- <div class="datepicker"></div> -->

				<div class="row calendar">
					<p class="stay-strong">Date de l'évènement</p>
					<div class="calendar-container">
						<form>
							<p >du <input type="text" placeholder="<?php echo date("d/m/Y");?>"> à <input type="text" placeholder="<?php echo date("H:i");?>"></p>
							<br><p>au <input type="text" placeholder="<?php echo date("d/m/Y");?>"> à <input type="text" placeholder="<?php echo date("H:i");?>"></p>
						</form>
						<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					</div>
				</div>
					<!-- <div class="datepicker"></div> -->

				<div class="row place">
					<p>Lieu</p>
					<input type="text"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				</div>

				<div class="row">
					<p>Titre</p>
					<input name="titre" type="text">
				</div>

				<div class="row texte">
					<p>Text</p>
					<textarea name="texte" rows="10" cols="50"></textarea>
				</div>

				<div class="row flex-right">
					<svg class="italic" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"> <path d="M0 0h24v24H0z" fill="none"/><path d="M10 4v3h2.21l-3.42 8H6v3h8v-3h-2.21l3.42-8H18V4z"/></svg>
					<svg class="bold" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M15.6 10.79c.97-.67 1.65-1.77 1.65-2.79 0-2.26-1.75-4-4-4H7v14h7.04c2.09 0 3.71-1.7 3.71-3.79 0-1.52-.86-2.82-2.15-3.42zM10 6.5h3c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-3v-3zm3.5 9H10v-3h3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					<svg class="underline" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17c3.31 0 6-2.69 6-6V3h-2.5v8c0 1.93-1.57 3.5-3.5 3.5S8.5 12.93 8.5 11V3H6v8c0 3.31 2.69 6 6 6zm-7 2v2h14v-2H5z"/></svg>
					<svg class="links" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/></svg>
				</div>

				<div class="row link">
					<p>Lien</p>
					<input type="text">
					<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
				</div>

				<div class="row entete">
					<p>Ajouter une image d'en-tête <span>(Maximum 500Ko)</span></p>
					<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
				</div>

				<div class="row frozen illustration">
					<p>Ajouter des images après le texte <span>(pour les textes de plus de 200 caractères)</span></p>
					<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M22 16V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2zm-11-4l2.03 2.71L16 11l4 5H8l3-4zM2 6v14c0 1.1.9 2 2 2h14v-2H4V6H2z"/></svg>
				</div>

				<div class="row submit frozen">
					<button class="program">Enregistrer et programmer la publication</button>
					<button class="publish">Publier maintenant</button>
				</div>

			</form>
		</article>
	</section>


	<section class="bloc3">
		<h4>Dernières évènements publiés</h4>

		<article>
			<div class="row update">
				<p>Agenda | il y a 2 heures<br>Ballet Classique</p>
			</div>


			<div class="row">
				<img src="images/event.jpg" alt="">
			</div>

			<div class="row detail">
				<p>Lieu : Halle des Sports Daniel Costantini<br>Horaires : de 11h00 à 23h00</p>
			</div>

			<div class="row text">
				<p>Samedi 24 Juin à 17h et dimanche 25 Juin à 14h Gala de Chorégraphie Halle des Sports Daniel Costantini Sections danses : Danse Moderne, Rythmique, Funk, Orientale, Classique, De salon, Folklorique, Zumba et GRS - Entrée 2€ Renseignements : 01 34 70 75 73 / contact@clec-chambly.fr Organisé par l’Association CLEC.</p>
			</div>


			<div class="row flex-right">
				<a href="" class="button edit"> 
					<svg class="icon" height="20" width="20" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					<p>Éditer</p>
				</a>

				<a href="" class="button delete"> 
					<svg class="icon" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					<p>Dépublier</p>
				</a>
			</div>
		</article>

		<article>
			<div class="row update">
				<p>Agenda | il y a 2 heures<br>Ballet Classique</p>
			</div>


			<div class="row">
				<img src="images/event.jpg" alt="">
			</div>

			<div class="row detail">
				<p>Lieu : Halle des Sports Daniel Costantini<br>Horaires : de 11h00 à 23h00</p>
			</div>

			<div class="row text">
				<p>Samedi 24 Juin à 17h et dimanche 25 Juin à 14h Gala de Chorégraphie Halle des Sports Daniel Costantini Sections danses : Danse Moderne, Rythmique, Funk, Orientale, Classique, De salon, Folklorique, Zumba et GRS - Entrée 2€ Renseignements : 01 34 70 75 73 / contact@clec-chambly.fr Organisé par l’Association CLEC.</p>
			</div>


			<div class="row flex-right">
				<a href="" class="button edit"> 
					<svg class="icon" height="20" width="20" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					<p>Éditer</p>
				</a>

				<a href="" class="button delete"> 
					<svg class="icon" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					<p>Dépublier</p>
				</a>
			</div>
		</article>
	</section>







	<section class="bloc3">
		<h4>Évènement programmés</h4>

		<article>
			<div class="row titre">
				<p>Fête du saucisson</p>
			</div>
			
			<div class="row summary">
				<p>Programmation prévue le 23/06/2017 à 20h00</p>
			</div>


			<div class="row flex-right">
				<a href="" class="button edit"> 
					<svg class="icon" height="20" width="20" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					<p>Éditer</p>
				</a>

				<a href="" class="button delete"> 
					<svg class="icon" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					<p>Dépublier</p>
				</a>
			</div>

		</article>


		<article>
			<div class="row" id="summary">
				<p>Pas d'autres publications programmées</p>
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