
<div class="card-body">

<?php


    if ($_SERVER["REQUEST_URI"] == "/adherent") {
        include "./contents/adherent.php";
    }
    if ($_SERVER["REQUEST_URI"] == "/livre") {
        include "./contents/livre.php";
    }
    if ($_SERVER["REQUEST_URI"] == "/pdo") {
        include "./contents/pdo.php";
    }
    if ($_SERVER["REDIRECT_URL"] == "/livre/edition") {
        include "./contents/livre/edition_livre.php";
    }       

?>
</div>