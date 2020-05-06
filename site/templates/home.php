<?php snippet('header') ?>

<body>
    <header>
        <?php snippet('menu') ?>
        <div class="slider">
            <img src="<?= $page->images() ?>" />
            <h1>CDA Interview Guide</h1>
            </hr>
        </div>
    </header>
    <div class="content">
       <?= $page->text()->markdown()->or('none')?>
    </div>
<?php snippet('footer') ?>