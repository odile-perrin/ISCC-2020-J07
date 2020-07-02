<?php
$produits=array(
    'T-shirt rouge' => 15.50,
    'T-shirt vert' => 15.50,
    'T-shirt argent' => 16.50,
    'Short bleu' => 19.99,
    'Short vert'=> 19.99,
    'Veste argent'=> 35,);

    foreach($produits as $intitule => $detail){
        echo '<p>' .$intitule. ':'. $detail. '</p>';
    }

    function afficher_produits($produits){
        echo'<table><tr><td> Produits Prix </td> </tr> </table>';
        foreach($produits as $elements => $prix){
            echo '<p>' . $elements. ':'. $prix. '</p>';
        }
    }

    afficher_produits($produits);
    ?>


