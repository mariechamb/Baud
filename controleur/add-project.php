

//<!-- J'include mon model -->
<?php include '../model/projects.php'; ?>
//<!-- =========================== -->


<?php

	// Je récupère mes données :

	$nom = $_POST['nom'];
	$budget = $_POST['budget'];
	$description1 = $_POST['description1'];
	$description2 = $_POST['description2'];
	$client = $_POST['client'];
	$realisation = $_POST['realisation'];
	$date_livraison = $_POST['date_livraison'];
	$prestation = $_POST['prestation'];
	$technos = $_POST['technos']; 
	$img1 = $_POST['img1']; 
	$img2 = $_POST['img2']; 
	$img3 = $_POST['img3']; 
	$maquette1 = $_POST['maquette1']; 
	$maquette2 = $_POST['maquette2'];
	$maquette3 = $_POST['maquette3'];
	$pourcentage = $_POST['pourcentage'];


	// Gestion des checkboxs :
	if($_POST['design']){
   $checkbox_design = "design";
	} else {
		$checkbox_design = "";
	};

	if($_POST['vitrine']){
	   $checkbox_vitrine = "vitrine";
	} else {
		$checkbox_vitrine = "";
	};

	if($_POST['ecommerce']){
	   $checkbox_ecommerce = "ecommerce";
	} else {
		$checkbox_ecommerce = "";
	};


	$categorie = $checkbox_design . " " . $checkbox_vitrine . " " . $checkbox_ecommerce;


	insertNewProject ($nom, $categorie, $description1, $description2, $client, $realisation, $date_livraison, $prestation, $technos, $img1, $img2, $img3, $maquette1, $maquette2, $maquette3, $pourcentage, $budget);

	?>