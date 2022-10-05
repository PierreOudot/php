<?php
//ajuste le meta title de chaque page.
function getTitle(){
    if($_GET["PHP_SELF"]==="/index.php"){
        $title = str_replace("/","",$_SERVER["PHP_SELF"]);
        $title = str_replace(".php","",$title);
    }else{
        $title = str_replace("page=/","",$_SERVER["QUERY_STRING"]);
    }
    return $title;
}

//nettoie les données du formulaire
function traitementDonnees($data){
    $data=trim($data);//enlève les caractères inutiles type doubles espaces, tab...
    $data=stripslashes($data);//enlève les /
    $data=htmlspecialchars($data);//on enlève les caract html

    return $data;
}

?>