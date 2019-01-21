<?php




$pdo = new PDO("mysql:dbname=BDD_Blackbooks;host=127.0.0.1","non-root","123", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

$requestSql = "
select * from livre 
  join auteur_has_livre on livre.id_livre = auteur_has_livre.livre_id_livre
  join auteur on auteur_has_livre.livre_id_livre = auteur.id_auteur
  join categories on livre.categories_id_categories = categories.id_categories 
" ;

$statement = $pdo->query($requestSql);

$tables = $statement->fetchAll();

?>
<table class="table table-striped">
    <thead>
      <tr>
        <th class="bgTitelTab"><b>Titre</th>
        <th class="bgTitelTab"><b>Auteur</th>
        <th class="bgTitelTab"><b>Catégorie</th>
        <th class="bgTitelTab"><b>Action</th>
      </tr>
    </thead>
    <tbody>
<?php  foreach ($tables as $livre) { ?>
        <tr class="borderTab ">

          <th class="borderTab"> <?= ucfirst($livre['titre'])."<br>" ?> </th>
          <th class="borderTab"> <?= ucfirst($livre['nom_auteur'])."<br>" ?> </th>
          <th class="borderTab"> <?= ucfirst($livre['nom_categorie'])."<br>" ?> </th>
          <th class="borderTab"> 
            <a href="http://php-decouverte.bwb/livre/edition?id=<?php echo $livre['id_livre'].'"' ?> class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
          </th> 
<?php  } ?>
        <tr>
    </tbody>
</table>
                    