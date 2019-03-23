<?php
    $apc->setLocal('website.title','Daniel VALAT');
    $apc->setLocal('website.description','Développeur Web/Apps & Administrateur Système et Réseaux');
    $apc->setLocal('website.location','<b>Localisation:</b><br>Cahors, France');
    $apc->setLocal('website.dispo','<b>Emploi:</b><br>Administrateur Système et Réseaux sur Toulouse');


    $apc->setLocal('contact.twitter','https://www.twitter.com/valatdaniel');
    $apc->setLocal('contact.email','mailgate.php');

    $comps[0]['icon'] = 'web';
    $comps[0]['title'] = 'Programmation web';
    $comps[0]['text'] = "Développement \"from-scratch\" d'applications et sites internet type Blog, Ecommerce, ERP, ...";

    $comps[1]['icon'] = 'sys';
    $comps[1]['title'] = 'Administration système';
    $comps[1]['text'] = "Création de réseaux larges ou locaux, configuration de serveur et intégration de solutions pro, Administration de postes clients, Gestion Linux & Windows";

    $comps[2]['icon'] = 'unv';
    $comps[2]['title'] = 'Vous avez un projet ?';
    $comps[2]['text'] = "Je peux vous aider dans le choix de vos solutions ou de votre infrastructure mais je ne prend actuellement plus de commandes pour du développement.";

    $apc->setLocal('comps',$comps);
?>