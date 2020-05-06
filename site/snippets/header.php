<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="<?= $page->description() ?>">
    <meta name="title" content="<?= $page->metatitle() ?>">
    <title><?= $page->title() ?></title>
    <?= css('assets/css/style.css') ?>

    <?php if ($page->toggle()->toBool() === false) { ?>
        <meta name="robots" content="noindex">
    <?php } ?>
    
    <?= $site->facebookpixel() ?>
    <?= $site->googleanalitycs() ?>

</head>