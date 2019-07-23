<?php $title = "Accueil";
include "header_footer/header.php"; ?>

	<div id="divGlobal">
		<form action="pageperso.php" method="POST">
			<label>Nom :</label><input type="text" name="nom">
			<label>Prénom :</label><input type="text" name="prenom">
			<label>Theme :</label><select type="number" name="theme">
				<option value="0">1</option>
				<option value="1">2</option>
				<option value="2">3</option>
			</select>
			<input type="submit" id="submit" name="submit" value="Entrer"/>
		</form>
	</div>

<?php include "header_footer/footer.php"; ?>