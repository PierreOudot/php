<?php
include_once 'fonction.php';
require_once 'header.php';
// echo var_dump($_GET['page']);
// echo var_dump($_POST);
$nom=$civilite=$age=$message=$email=$raison=""; //on instancie les variables utilisées utlérieurement , comme vides
$nomErr=$civiliteErr=$ageErr=$messageErr=$emailErr=$raisonErr=""; //idem pour les erreurs à renvoyer et afficher en cas de pb

//exécute le bloc une fois le bouton ok du form pressé , si la bonne methode(post:get) est appellée cf method= dans le code html du form
if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    //on apllique une methode de validation/modif des données
    if(empty($_POST['civilite'])){ //empty verifie que le champs n'est pas vide
        $civiliteErr="Sélectionnez votre civilité";
    }else{
        $civilite= $_POST['civilite'];
    }

    if(empty($_POST['nom'])){
        $nomErr="Renseignez votre nom et prénom";
    }else{
        $nom= traitementDonnees($_POST['nom']);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
            $nomErr = "Renseignez seulement des lettres et espaces"; // on verifie qu'il n'y a que des caractères autorisés dans le nom
            $nom="";
        }
    }

    if(empty($_POST['mesage'])){
        $messageErr="Soyez plus explicite";
    }else{
        $message= traitementDonnees($_POST['message']);
    }

    if(empty($_POST['age'])){
        $ageErr="Renseignez votre age";
    }else{
        if(filter_input(INPUT_POST,traitementDonnees($_POST['age']),FILTER_VALIDATE_INT)!= false){//filter_input verifie que la data est du bon type et la valide, sinon renvoie false
            $age= filter_input(INPUT_POST,traitementDonnees($_POST['age']),FILTER_VALIDATE_INT);
        }else{
            $ageErr="Age invalide";
        }
    }

    if(empty($_POST['email'])){
        $emailErr="Renseignez votre email";
    }else{
        if(filter_input(INPUT_POST,traitementDonnees($_POST['email']),FILTER_VALIDATE_INT)!= false){
            $email= filter_input(INPUT_POST,traitementDonnees($_POST['email']),FILTER_VALIDATE_INT);
        }else{
            $emailErr="Adresse email invalide";
        }
    }

    if(empty($_POST['raison'])){ //empty verifie que le champs n'est pas vide
        $raisonErr="Prouvez votre motivation";
    }else{
        $civilite= $_POST["raison"];
    }
}

?>

<body>
    <div class="intro_contact">
        <p>Merci de votre intérêt pour Rien, veuillez remplir le formulaire suivant et nous ne vous recontacterons pas</p>
    <div class="formulaire_contact">
</br>
        <form action="<?php echo htmlspecialchars('index.php?page=/contact');?>" method="post"> <!--permet de renvoyer les infos du formulaire sur la même page, permet d'afficher les alertes à l'user +règle sécu-->
            <label for="civilite">Civiltité</label>
            <select multiple name="civilite" size="3"> <!--select = menu deroulant boxé-->
                <option value="Mr"> Mr </option>
                <option value="Mme"> Mme </option>
                <option value="Helicoptère de combat"> Helicoptère de Combat </option>
            </select>
            <span class="error">* <?php echo $civiliteErr;?></span>
</br></br>
            <label for="nom">Votre nom :</label>
                 <input type="text" name="nom" id="name" />
                 <span class="error">* <?php echo $nomErr;?></span>
                </br></br>
            <label for="age">Votre âge : </label>
                 <input type="text" name="age" id="age" />
                 <span class="error">* <?php echo $ageErr;?></span>
                </br></br>
            <lablel for="email">Votre adresse email :</lable>
                 <input type="email" name="email" id="email" />
                 <span class="error">* <?php echo $emailErr;?></span>
                </br></br>
            <label for="message" type ="text" id="message">Vote message :</label>
                 <textarea name="message" rows="10" cols="30"></textarea>
                 <span class="error">* <?php echo $messageErr;?></span>
                 </br></br>
            <div class="raison">
                <input type="radio" name="raison" value="demander une demo"> demander une démo
                <input type="radio" name="raison" value="pour rien"> pour rien
                <input type="radio" name="raison" value="nouveau projet"> nouveau projet
                <span class="error">* <?php echo $raisonErr;?></span>
            </div>
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