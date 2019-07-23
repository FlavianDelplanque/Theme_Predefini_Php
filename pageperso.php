<?php $title = "Page Perso";
$nombreTheme = ($_POST['theme']);
$theme = array(
			array('photodecouverture1.jpg','photodeprofil1.jpg',"fondecran1.jpg"),
			array('photodecouverture2.jpg','photodeprofil2.jpg',"fondecran2.jpg"),
			array('photodecouverture3.jpg','photodeprofil3.jpg',"fondecran3.jpg"),
		);
include "header_footer/header.php"; 
if (empty($_POST['nom'])) {
	$nom = "Gourmaud";
}
else {
	$nom = $_POST['nom'];
}
if (empty($_POST['prenom'])) {
	$prenom = "Jamy";
}
else {
	$prenom = $_POST['prenom'];
}
?>

<header style="background-image: url(<?php echo "image/".$theme[$nombreTheme][0]; ?>);">
	<div style="background-image: url(<?php echo "image/".$theme[$nombreTheme][1] ?>);" id="imageDeProfil"></div>
	<h2 id="Nom"><?php echo $nom." ".$prenom ?></h2>
</header>

<div id="divGlobal">
	<h2>Présentation</h2>
	<p id="pPresentation">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<?php include "header_footer/footer.php"; ?>