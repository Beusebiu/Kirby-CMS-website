<nav class="topnav">
            <div class="logo">
                <a href="http://test.local" ><img src="images/bemo-logo2.png" /></a>
            </div>
            <div class="menu">
                <input type="checkbox" id="toggle" name="toggle">
                <ul class="verticalNav">
                    <?php foreach ($site->children()->listed() as $subpage):  ?>
                        <li><a href="<?=$subpage->url() ?>"><?= $subpage->title() ?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="overlay">
                <label for="toggle"></label>
            </div>
        </nav>