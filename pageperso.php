<?php $title = "Page Perso";
include "header_footer/header.php"; 
$theme = $_POST['theme'];
$theme1 = ['photodecouverture1.jpg','photodeprofil1.jpg',"fondecran1.jpg"];
$theme2 = ['photodecouverture2.jpg','photodeprofil2.jpg',"fondecran2.jpg"];
$theme3 = ['photodecouverture3.jpg','photodeprofil3.jpg',"fondecran3.jpg"];
?>

<header style="background-image: url(<?php echo "image/".$theme[0]; ?>);">
	<img src="image/<?php echo $theme[1] ?>" id="imageDeProfil">
	<h2 id="Nom"><?php echo $_POST['nom']." ".$_POST['prenom'] ?></h1>
</header>

<div id="divGlobal">
	<h2>Présentation</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<?php include "header_footer/footer.php"; ?>