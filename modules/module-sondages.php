<section>
	<div class="chart">

		<div class="overlay">
			<p class="participants">452</p>
			<p><span class="pourcentage">30</span>%</p>
		</div>

		<svg class="circle-chart" viewbox="-1 -1 36 36" width="200" height="200" xmlns="http://www.w3.org/2000/svg">

		   <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />

		   <circle class="circle-chart__circle" stroke="#00acc1" stroke-width="2" stroke-dasharray="100" stroke-dashoffset="150" stroke-linecap="butt" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />

		</svg>
	</div>
</section>
		  <!-- stroke-dashoffset 
		  Le pourcentage est compté entre 100 et 200, 
		          ex : 50% : stroke-dashoffset="50"
		               80% : stroke-dashoffset="180"
		-->



<script>
	
	function animatePourcentage(){
		var pourcentage = $('.pourcentage').html();
		var strokeLenght = $('.circle-chart__circle').attr('stroke-dashoffset');

	
		strokeLenght = parseInt(pourcentage) + 100;

		alert(strokeLenght);

	}

	animatePourcentage()

</script>