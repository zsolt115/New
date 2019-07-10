<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2 class="home">Home</h2>

		<?php

	
		if (isset($_SESSION['u_uid'])) {
			//echo "Sikeres belepes!";
		?>			

					<p><h2 class="feltoltesLink"><a href="feltoltes.php"> Adatok feltöltése </a></h2></p>
					<p><h2 class="feltoltesLink"><a href="listazas.php"> Adatok listazasa </a></h2></p>
		
		<?php
		}

		?>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
