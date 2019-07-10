<?php
include_once 'header.php';

?>

<section class="main-container">
	<div class="main-wrapper" align="center">
		<h2 class="tpfk">Tanulmányi Programokon Kívüli Tevékenységek Listája</h2>

			<form class="feltoltes-form" action="teljesLista.php" method="POST">
			 <button type="submit" name="all">Teljes lista</button>
			</form>
			
			<form class="feltoltes-form" action="keresUsername.php" method="POST">
			 <input type="text" name="usern" placeholder="Felhasználónév"><button type="submit" name="keresusername">Keres</button>
			</form>
			 
			 <form class="feltoltes-form" action="keresCim.php" method="POST">
			 <input type="text" name="cim" placeholder="Cím"> <button type="submit" name="kerescim">Keres</button>
			 </form>

			 <form class="feltoltes-form" action="keresHelyszin.php" method="POST">
			 <input type="text" name="helyszin" placeholder="Helyszín"> <button type="submit" name="kereshelyszin">Keres</button>
			 </form>

			 <form class="feltoltes-form" action="keresKategoria.php" method="POST">
			 <select name="kategoria">
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
					</select><button type="submit" name="kereskategoria">Keres</button>
			 </form>
			  
<?php 
if (isset($_POST['all'])){
	include_once 'teljesLista.php';
} 
if (isset($_POST['usern'])){
include_once 'keresUsername.php';
} 
if (isset($_POST['cim'])){
include_once 'keresCim.php';
} 
if (isset($_POST['helyszin'])){
include_once 'keresHelyszin.php';
} 
if (isset($_POST['kategoria'])){
include_once 'keresKategoria.php';
}
?>
		
	</div>
</section>

<?php
	include_once 'footer.php';
?>