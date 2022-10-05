<?php
include_once 'fonction.php';
require_once 'header.php';
// echo var_dump($_GET['page']);
echo var_dump($_SERVER);
$nom=$civilite=$age=$message=""; //on instancie les variables utilisées utlérieurement , comme vides
if($_SERVER['REQUEST_METHOD'] == 'POST'){ //exécute le bloc une fois le bouton ok du form pressé , cf method= dans le code html du form
    //on apllique une methode de validation/modif des données
    

}

?>

<body>
    <div class="intro_contact">
        <p>Merci de votre intérêt pour Rien, veuillez remplir le formulaire suivant et nous ne vous recontacterons pas</p>
    <div class="formulaire_contact">
</br>
        <form action="<?php echo htmlspecialchars('contact.php');?>" method="post"> <!--permet de renvoyer les infos du formulaire sur la même page, permet d'afficher les alertes à l'user +règle sécu-->
            <label for="civilite">Civiltité</label>
            <select multiple name="civilite" size="3">
                <option value="Mr"> Mr </option>
                <option value="Mme"> Mme </option>
                <option value="Helicoptère_de_combat"> Helicoptère de Combat </option>
            </select>
</br>
            <lablel for="nom">Votre nom :</lable>
                 <input type="text" name="nom" id="name" />
            <label for="age">Votre âge : </label>
                 <input type="text" name="age" id="age" />
            <label for="message" type ="text" id="message">Vote message :</label>
                 <textarea name="message" rows="10" cols="30"></textarea>
            <p><input type="submit" value="OK"></p>
        </form>
    </div>
</br>
    <pre class="yes">
▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄
████▌▄▌▄▐▐▌█████
████▌▄▌▄▐▐▌▀████
▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀
    </pre>
</body>

<?php
require_once 'footer.php';?>