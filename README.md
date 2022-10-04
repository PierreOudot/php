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
```cf mtehodes session
#### *utiliser les données server*:
```cf $_SERVER : recupere dans un array un ensemble de données du server.

variables d'environnement : centraliser dans un fichier des variable utilisées parotut.
