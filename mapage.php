<?php 
require_once 'fonction.php';
require 'header.php';?>


<body>
    <div class="div_accueil">
        <p>Bienvenue sur la page d'accueil de mon site: un peu de tout et surtout du rien. Yum-yum.</p>

    </div>
    </br>

    <h2>Menu</h2>
    <div class="div_accueil_menu">
        <ul class="menu">
            <li><a href="index.php?page=/tout" target="_blank">Tout</a></li>
            <li><a href="index.php?page=/rien" target="_blank">Rien</a></li>
            <li><a href="index.php?page=/tout_et_rien" target="_blank">Tout et Rien</a></li>
            <li><a href="index.php?page=/contact" target="_blank">Contact</a></li>
        </ul>
    </div>
    
</body>
<?php require 'footer.php';?>
