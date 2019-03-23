<?php
include('bin/core.php');
include('bin/base.php');
?>

<div class="app-view">
<div class="marklet">
    <div class="comps">
        <div class="pres">Besoin d'aide ou de conseils ?</div>
<?php foreach($apc->getLocal('comps') as $comp){ ?>
        <div class="comp">
            <img src="media/img/<?php echo $comp['icon']; ?>.png">
            <div class="comp-data">
                <div class="comp-title"><?php echo $comp['title']; ?></div>
                <div class="comp-text"><?php echo $comp['text']; ?></div>
            </div>
        </div>
<?php } ?>
    </div>
    <div class="comps">
        <div class="pres">Mes projets</div>
<?php foreach($apc->getLocal('projects') as $project){ ?>
        <div class="comp">
            <img src="media/img/<?php echo $project['icon']; ?>.png">
            <div class="comp-data">
                <div class="comp-title"><?php echo $project['title']; ?></div>
                <div class="comp-text"><?php echo $project['text']; ?></div>
            </div>
        </div>
<?php } ?>
    </div>
</div>