<?php 
require_once 'fonction.php';

//front controller
if (isset($_GET['page'])) { //isset permet de verifier si une varibale est déclarée, couplée à get:va chercher la valeur de page=valeur dans l'url
    $requested_page = $_GET['page'];
 }else{
     $requested_page = '/mapage';
}
$requested_page =$_GET['page'];

    switch($requested_page){
        case "/tout":
            include(__DIR__."/tout.php");// fonction header() de php pour rediriger vers, attention = entête http...
            break;
        case "/rien":
            include(__DIR__."/rien.php");
            break;
        case "/tout_et_rien":
            include(__DIR__."/tout_et_rien.php");
            break;
        case "/contact":
            include(__DIR__."/contact.php");
            break;
        default:
            include(__DIR__."/mapage.php");
            break;
    }
    die(); //permet de gerer les bots, d'eùmpecher l'exécution du bloc de code suivant le die(); 
?>
<!-- ? marque le debut d'une requete envoyée du anv au serv -->
<!-- <body>
    <div class="div_index">
        <ul>
            <li><a href="index.php?page=/tout">Tout</a></li> 
            <li><a href="index.php?page=/rien">Rien</a></li>
            <li><a href="index.php?page=/tout_et_rien">Tout et Rien</a></li>
        </ul>    
    </div>
</body> -->


