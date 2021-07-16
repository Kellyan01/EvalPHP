<?php
    include('../vue/vue_article.php');

    if(isset($_POST['nom_article']) and isset($_POST['prix_article'])
            and !empty($_POST['nom_article']) and $_POST['prix_article']){

                $nom_article=$_POST['nom_article'];
                $prix_article=$_POST['prix_article'];

                include('../model/model_article.php');

            }
            else{
                //affichage dans la page html de ce que l'on à enregistré en bdd
                echo '<p>veuillez remplir les champs de formulaire</p>';
            }
?>