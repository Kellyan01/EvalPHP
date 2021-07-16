<?php

    try {
        
        include('../utils/connect_bdd.php');
        
        //permet d'accepter les accents
        $bdd->exec("set names utf8");

        //Exécution de la requête SQL insert
        $req = $bdd->prepare('insert into article(nom_article, prix_article) 
        values(:nom_article, :prix_article)');
        
        /*values("'.$nom_article.'", "'.$prix_article.'")');*/

        //Exécution de la requête SQL création à l’aide d’un tableau qui va contenir le ou les paramètres à affecter à la requête SQL
        $req->execute(array(
            'nom_article' => iconv("UTF-8", "ISO-8859-1//TRANSLIT", $nom_article),
            'prix_article' => $prix_article,
        ));

        echo "ajout de l'article : $nom_article - PRIX : $prix_article";
        

    }

    catch (Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }

?>