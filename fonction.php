<?php

function getTitle(){
    $title = str_replace("/","",$_SERVER["PHP_SELF"]);
    $title = str_replace(".php","",$title);
    return $title;
}

?>