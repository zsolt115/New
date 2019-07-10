<?php
include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper" align="center">
		<h2 class="tpfk">Tanulmányi Programokon Kívüli Tevékenységek</h2>
		
		<form class="feltoltes-form" action="includes/insert.inc.php" method="POST">
			 <input type="text" name="cim" placeholder="Cím"> 
			 <input type="text" name="helyszin" placeholder="Helyszín">
			 <textarea name="leiras" placeholder="Leírás" cols="50" rows="20"></textarea>
			 <input type="file" name="kep" > <!--#kep (browse)-->
			 <!--<input type="text" name="kategoria" placeholder="Kategória">-->
				<p>	<select name="kategoria">
						<option value="Sport">Sport</option>
						<option value="Tanc">Tanc</option>
						<option value="Szervezes">Szervezes</option>
						<option value="Tanulmanyi kirandulas">Tanulmanyi kirandulas</option>
						<option value="Haza utazas">Haza utazas</option>
						<option value="Depi">Depi</option>
						<option value="Kutatas">Kutatas</option>
						<option value="Verseny">Verseny</option>
						<option value="Kavehaz">Kavehaz</option>
						<option value="SocialNet">SocialNet</option>
						<option value="Munka">Munka</option>
					</select></p>
			<button type="submit" name="submit">Mehet</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>