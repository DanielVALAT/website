<!DOCTYPE html>
<html>
<head>
    <title><?php echo $apc->getLocal('website.title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $apc->getLocal('website.description'); ?>">
    <link rel="stylesheet" href="media/css/style.css">
    <link rel="icon" href="media/img/logo.png">
    <script src="media/js/script.js"></script>
</head>
<body>
<div class="nav">
    <div class="head">
        <img src="media/img/logo.png" class="avatar">
        <div class="title"><?php echo $apc->getLocal('website.title'); ?></div>
        <div class="description"><?php echo $apc->getLocal('website.description'); ?></div>
        <div class="location">
            <img src="media/img/loc.png">
            <span><?php echo $apc->getLocal('website.location'); ?></span>
        </div>
        <div class="dispo">
            <img src="media/img/dispo.png">
            <span><?php echo $apc->getLocal('website.dispo'); ?></span>
        </div>
        <div class="buttons">
            <a href="<?php echo $apc->getLocal('contact.twitter'); ?>">Me suivre sur Twitter</a>
        </div>
    </div>
</div>