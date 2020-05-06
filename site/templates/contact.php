<?php snippet('header') ?>

<body>
    <header>
    <?php snippet('menu') ?>
        <div class="slider">
            <img src="<?= $page->images() ?>" />
        </div>
    </header>
    <div class="content">
        <div class="info">
            <?= $page->heading()->markdown() ?>
        </div>
        
        <?php if($success){ ?>
        <div class="alert success">
            <p><?= $success ?></p>
        </div>
        <?php }else{ ?>
        <?php if (isset($alert['error'])){ ?>
            <div><?= $alert['error'] ?></div>
        <?php }} ?>

        <form action="<?php echo $page->url()?>/" method="post">
            <label for="name">NAME: *</label>
            <input type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>"/>
            <label for="email">EMAIL ADDRESS: *</label>
            <input type="text" id="email" name="email" value="<?= $data['email'] ?? '' ?>"/>
            <label for="message">HOW CAN WE HELP YOU? *</label>
            <textarea id="message" name="message">
                    <?= $data['message']?? '' ?>
            </textarea>
            <div class="buttons">
                <input type="reset" name="reset" value="Reset">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
        <div class="note">
            <?= $page->text()->markdown() ?>
        </div>
    </div>
<?php snippet('footer') ?>