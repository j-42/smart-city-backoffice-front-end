	<section class="bloc2">
		<h4>Ajouter un nouveau lieu</h4>

		<article>
			<form action="">

				<div class="row">
					<p>Surtitre</p>
					<input name="titre" type="text">
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
					<p>Lieu</p>
					<input type="text">
					<svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
				</div>

				<div class="row link">
					<p>Lien</p>
					<input type="text">
					<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
				</div>

				<div class="row entete">
					<p>Ajouter une image</p>
					<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
				</div>

				<div class="row submit frozen">
					<button class="program">Enregistrer et programmer la publication</button>
					<button class="publish">Publier maintenant</button>
				</div>

			</form>
		</article>
	</section>


	<section class="bloc4">
		<h4>Liste des lieux actuellement publiés</h4>

		<article>

			<div class="row detail">
				<p>Décheterie Fifou<br>Horaires : Du lundi au vendredi de 11h00 à 23h00</p>
			</div>

			<div class="row text">
				<p>Décheterie pour aller jeter des trucs et des machins</p>
			</div>

			<div class="row">
				<img src="images/dechets.jpg" alt="">
			</div>

			<div class="editing">
				<a href="" class="button edit"> 
					<svg class="icon" height="18" width="18" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					<p>Éditer</p>
				</a>

				<a href="" class="button activation">
					<svg class="icon"  height="18" width="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/></svg>
					<p>Activer</p>
				</a>


				<a href="" class="button up">
					<svg class="icon" height="18" width="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					<p>Monter</p>
				</a>

				<a href="" class="button down">
					<svg class="icon" height="18" width="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/><path d="M0-.75h24v24H0z" fill="none"/></svg>
					<p>Descendre</p>
				</a>
			</div>
		</article>

		<article>

			<div class="row detail">
				<p>Décheterie Fifou<br>Horaires : Du lundi au vendredi de 11h00 à 23h00</p>
			</div>

			<div class="row text">
				<p>Décheterie pour aller jeter des trucs et des machins</p>
			</div>

			<div class="row">
				<img src="images/dechets.jpg" alt="">
			</div>

			<div class="editing">
				<a href="" class="button edit"> 
					<svg class="icon" height="18" width="18" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					<p>Éditer</p>
				</a>

				<a href="" class="button activation">
					<svg class="icon"  height="18" width="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/></svg>
					<p>Activer</p>
				</a>


				<a href="" class="button up">
					<svg class="icon" height="18" width="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
					<p>Monter</p>
				</a>

				<a href="" class="button down">
					<svg class="icon" height="18" width="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/><path d="M0-.75h24v24H0z" fill="none"/></svg>
					<p>Descendre</p>
				</a>
			</div>
		</article>
	</section>