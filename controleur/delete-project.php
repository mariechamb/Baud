

<!-- J'include mon model -->
<?php include '../model/projects.php'; ?>
<!-- =========================== -->

<!-- Je récupère l'ID du projet que je souhaite supprimer -->
<?php $id = $_GET["id"]; ?>


<!-- J'appelle ma fonction pour supprimer le projet en faisant passer l'id du projet à supprimer -->
<?php 
softDeleteProject ($id); 
?>


	