  <?php

  $id = $_GET['id'];

#Si $id est true alors je crée une nouvelle instence de PDO

$pdo = new PDO("mysql:dbname=BDD_Blackbooks;host=127.0.0.1","non-root","123",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
$categories_req = $pdo->query('select * from categories');
$auteurs_req = $pdo->query('select * from auteur');  


$categories = $categories_req->fetchAll();
$auteurs = $auteurs_req->fetchAll();

function verifSelected($id_by_livre,$id_by_lists){
  if ($id_by_livre == $id_by_lists) {
    return "selected";
  }




}

  if($id == true ){

  $livre_req = $pdo->query('select * from livre 
  join auteur_has_livre on livre.id_livre = auteur_has_livre.livre_id_livre
  join auteur on auteur_has_livre.livre_id_livre = auteur.id_auteur
  join categories on livre.categories_id_categories = categories.id_categories
  where id_livre = '.$id);

      // Méthode fetch pour demander un seul tuple
    $livre = $livre_req->fetch();

    $auteur_livre_req = $pdo->query('select * from auteur_has_livre where livre_id_livre ='.$id);
    $auteur_livre = $auteur_livre_req->fetch();

   /**
    * Vérif pour que la categorie du livre 
    * soit celle avec la proprieter selected donc affiché de basse 
    */
  function checkSelectedCat($id_categories,$auteur){
    if ($id_categories['id_categories '] == $auteur ) {
      return "selected";
    }   
  }

     /**
    * Vérif pour que la categorie du livre 
    * soit celle avec la proprieter selected donc affiché de basse 
    */
    function checkSelectedAut($auteur_livre,$auteur){
      if ($auteur_livre['auteur_id_auteur'] == $auteur['id_auteur']   ) {
        return "selected";
      }   
    }
  }


  ?>

  <form  class="col-6" method="post" action="http://php-decouverte.bwb/fonctions/edit_livre.php">
    <div class="form-group">
      <input name="id_livre" value="<?= $livre["id_livre"] ?>"  type="hidden" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Titre</label>
      <input name="titre" value="<?= $livre["titre"] ?>"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Titre">
    </div>
      <div class=" form-group row">
          <label class="  col-form-label">Auteur</label>
          <select name="id_auteur" class="form-control">
            <?php foreach ( $auteurs as $auteur ) { ?>
            <option value="<?= $auteur["id_auteur"] ?>" <?php if($id == true ){ echo checkSelectedAut($auteur_livre,$auteur); }?>> <?=  strtoupper($auteur["nom_auteur"]) ?> </option>
            <?php } ?>
          </select>     
      </div>
      <div class=" form-group row">
          <label class="  col-form-label">Catégorie</label>
          <select name="id_categorie" class="form-control">
            <?php foreach ( $categories as $categorie ) { ?>
            <option value="<?= $categorie["id_categories"]?>" <?php if($id == true ){ echo checkSelectedCat($categorie,$livre);} ?> >  <?= strtoupper($categorie["nom_categorie"]) ?> </option>
            <?php } ?>
          </select>     
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
