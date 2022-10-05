# TP php

## **1.1-Definitions**

### *Apache* : 

logiciel libre de server http.

### *Navigateur (web)

logiciel permettant de consulter les pages web.c'est une interface utilisateur,intège la gestion des protocoles réseau (IP...) et process les langages du web : HTML et CSS, puis php, js...

### **PHP**

Php Hypertext Processor, langage de scripts,simple,open source, destiné au dev d'appli web.Facilement integrable à HTML.Code executer sur le server et genere du html utilisé par le navigateur. Propose des fonctions avancées, pas seulement limité au dev web.

### **langages client**

langage dont le code est executé sur l'ordinateur du client. ex html css, javascript

### **langages server*

langages dont le code s'exécute coté server: ex JAAVA, SQL, php, ruby, python...

Attention certains langages peuvent être utilisés des deux côtés.

### **HTTP**

"Hypertext Transfert Protocol" :protocole couche 7 OSI permettant de transmettredoc hypermedia, ex HTML, permet au anv web de communiquer avec servers entre autres. suit modèle client-server, protocol sans état (pas de données conservée sur server une fois la co fermée).par defaut/standard =port 80

### **Server Web**

machine dédiée à un logiciel de service de ressources web. Server repondant à des requetes web (HTTP). Supporte aussi les protocoles mails,BDD, streaming...

## **1.2-Creation template**

header et footer ne contiennent pas de balises php, uniqument de l'html
On peut inclure des balises php dans du html "<?php ....;?>
Attention : en utlisant des fichiers html header footer appellé par le code php, on respecte la structure d'un seul fichier : le header ouvre le code html, footer le ferme, pas de repet. On utlise aucune balise html ouverture/ fermeture dans le fichier php.

*include vs require*: fonctions permettant d'inclure un fichier dans une page. mêm role des deux fonctions, require leve une exception de plus haut niveau.

*passer des variables d'une page à une autre*: plusieurs méthodes:

#### *utiliser des variables de session*:
cf methodes session : creer des variable de session, potentiellement persistantes (session se ferme par defaut à la fermeture de l'onglet/co avec le site)
cf methodes get:$_GET["clé"]: va récupérer des données présentes dans l'url.
cf methodes post: $_POST[...] 
les deux methodes se basent sur des arrays associatifs, sont des variables super globales. get se abse sur données d'url, pas du tout sécurisée, alors que post est beaucoup plus sécurisé, utilisé pour transférer données de form par ex.

#### *utiliser les données server*:

cf $_SERVER : recupere dans un array un ensemble de données du server.

utilisation d'un fichier de fonctions, bien penser à l'appeler avec resuire_once 'nomfichier.php' dans chaque fichier pour y utiliser les dites fonctions.
faire attention aux balises php (bien ouvrir fermer );

variables d'environnement : centraliser dans un fichier des variable utilisées parotut.

## **1.3-front controller pattern**:

pattern permettant de centraliser la gestion des requêtes dans une seule page (= un seul point d'entréé). Permet d'encapsuler la redirection des liens, sans donner un accès direct vers le fichier source de la page redirigée.

## **1.4-formulaire**

cf la mise en plce de formulaires en html. on inclut un fichier php pour gérer les actions.

--->utilisation option required en html
--->on utilise un script php pour établir des règles particulières dans le formulaire.

attention de prendre en compte les notions de sécurité en créant le formulaire, bien utiliser la fonction htmlspecialchars pour éliminer l'injection de commandes html.

cf contact.php pour plus de détails

