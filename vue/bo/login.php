<?php

//<!-- I INCLUDE THE PROJECTS MODEL HERE  -->
include '../../model/users.php'; 

// J'appelle ma fonction pour vérifier si le nom utilisateur existe dans la BDD

$allUsers = getAllUsers ();


//<!-- =========================== -->

//<!-- J'appelle ma fonction pour récupérer les infos de mon portfolio  -->
// $portfolioProjets = getPortfolioProjectsInfo ();
//<!-- =========================== -->

//<!-- I INCLUDE THE HEAD HERE  -->
include '../../vue/front/sections/head.phtml'; 
//<!-- =========================== -->

//<!-- I INCLUDE THE HEADER HERE  -->
include '../../vue/front/sections/header.phtml'; 
//<!-- =========================== -->

// <!-- I INCLUDE THE VIEW HERE  -->
include './login.phtml'; 
//<!-- =========================== -->

//<!-- I INCLUDE THE FOOTER HERE  -->
// include 'vue/footer.php'; 
//<!-- ========================== -->

?>