<?php $title = "Accueil";
include "header_footer/header.php"; ?>

	<div id="divGlobal">
		<form action="pageperso.php" method="POST">
			<label>Nom :</label><input type="text" name="nom">
			<label>Prénom :</label><input type="text" name="prenom">
			<label>Theme :</label><input type="number" name="theme">
			<input type="submit" id="submit" name="submit" value="Entrer"/>
		</form>
	</div>

<?php include "header_footer/footer.php"; ?>