<?php

function getTitle(){
    if($_GET["PHP_SELF"]==="/index.php"){
        $title = str_replace("/","",$_SERVER["PHP_SELF"]);
        $title = str_replace(".php","",$title);
        var_dump("fruit");
    }else{
        $title = str_replace("page=/","",$_SERVER["QUERY_STRING"]);
    }
    return $title;
}

?>