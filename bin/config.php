<?php
    $apc->setLocal('website.title','Daniel VALAT');
    $apc->setLocal('website.description','Développeur Web/Apps & Administrateur Système et Réseaux');
    $apc->setLocal('website.location','<b>Localisation:</b><br>Cahors, France');
    $apc->setLocal('website.dispo','<b>Emploi:</b><br>Administrateur Système et Réseaux sur Toulouse');


    $apc->setLocal('contact.twitter','https://www.twitter.com/valatdaniel');
    $apc->setLocal('contact.email','mailgate.php');


    // Comps
    $comps[0]['icon'] = 'web';
    $comps[0]['title'] = 'Programmation web';
    $comps[0]['text'] = "Développement \"from-scratch\" d'applications et sites internet type Blog, Ecommerce, ERP, ...";

    $comps[1]['icon'] = 'sys';
    $comps[1]['title'] = 'Administration système';
    $comps[1]['text'] = "Création de réseaux larges ou locaux, configuration de serveur et intégration de solutions pro, Administration de postes clients, Gestion Linux & Windows";

    $comps[2]['icon'] = 'unv';
    $comps[2]['title'] = 'Vous avez un projet ?';
    $comps[2]['text'] = "Je peux vous aider dans le choix de vos solutions ou de votre infrastructure qui seront le mieux adaptées a votre budget et votre projet.";

    $comps[3]['icon'] = 'inv';
    $comps[3]['title'] = 'Passer commande';
    $comps[3]['text'] = "Actuellement je ne prend plus de commandes pour du développement web. Je reste disponible pour de petits projets, n'hésitez pas a me contacter !";

    $apc->setLocal('comps',$comps);


    // Projects
    $projects[0]['icon'] = 'apc';
    $projects[0]['title'] = 'APC Framework';
    $projects[0]['text'] = "APC Framework est un kit de développement que j'utilise dans la plupart de mes projets web afin de me fournir une base de code propre et commune afin d'en faciliter la mise à jour.";

    $projects[1]['icon'] = 'pkg-close';
    $projects[1]['title'] = 'APC Webcomponents';
    $projects[1]['text'] = "APC Webcomponents est un kit graphique utilisé pour mes applications web afin d'en unifier l'interface et ainsi rendre les applications intercompatibles.";

    $projects[2]['icon'] = 'apc-shield';
    $projects[2]['title'] = 'APC Shield';
    $projects[2]['text'] = "APC Shield est un service de transfert de données sécurisé et une boite a outils pour la communication entre mes serveurs et applications.";

    $projects[3]['icon'] = 'ic-os';
    $projects[3]['title'] = 'ICESERV OS';
    $projects[3]['text'] = "Historiquement, ICESERV OS était un gestionnaire de serveur de jeux, désormais c'est une interface type \"Bureau\" contenant diverses applications que je développe activement.";

    $apc->setLocal('projects',$projects);
?>