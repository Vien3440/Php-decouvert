<?php

//var_dump($_POST );

$livre = $_POST ;
// ici ont vas recuperer les donnes du formulaire pour les persiter 
$pdo = new PDO("mysql:dbname=BDD_Blackbooks;host=127.0.0.1","non-root","123", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));


// $result = $pdo->exec("UPDATE livre SET nom_livre='" . $livre['livre'] . "' , editeur='" . $livre['editeur'] . "' WHERE id_livre=" . $livre['id']);

//$statement = $pdo->prepare("UPDATE livre SET titre=':titre_livre', categories_id_categories=':id_categorie' WHERE id_livre=:id");
//$statement->execute(array(
//    'titre_livre' => $livre['titre'],
//    'id_categorie' => $livre['id_categorie'],
//    'id' => $livre['id_livre']
//));

if ($livre['id_livre']) {
    $edit_livre = $pdo->prepare("UPDATE livre SET titre=? , categories_id_categories=? WHERE id_livre=?");
    $edit_livre->execute([$livre['titre'], $livre['id_categorie'], $livre['id_livre']]);

    $edit_auteur_as_livre = $pdo->prepare("UPDATE auteur_has_livre SET auteur_id_auteur=? WHERE livre_id_livre=?");
    $edit_auteur_as_livre->execute([$livre['id_auteur'], $livre['id_livre']]);


}   
if ( !$livre['id_livre']) {
    $creat_livre = $pdo->prepare("INSERT INTO livre SET titre=? , categories_id_categories=? editeur='none'");
    $creat_livre->execute([$livre['titre'], $livre['id_categorie']]);

    $edit_auteur_as_livre = $pdo->prepare("INSERT INTO auteur_has_livre SET auteur_id_auteur=? , livre_id_livre=?");
    $edit_auteur_as_livre->execute([$livre['id_auteur'], $livre['id_livre']]);

}

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>