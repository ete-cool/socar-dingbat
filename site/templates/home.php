<?php snippet('header') ?>
<?php foreach ($pages->listed() as $p): ?>
    <div class="slideshow">
        <div class="slide-logo">
            <img src="../assets/icons/logo.svg" alt="">
        </div>

        <div class="slideshow-box">
            <div class="slideshow-holder">
                <?php foreach ($p->images() as $workimage): ?>
                    <div class="slide">
                        <?= $workimage ?><br><br>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="fixed-text">
            Enquiries : contact@artement-dep.com<br><br>
            For more information
            <div class="icon-download">
                <a href="../assets/brandbook.pdf" download>Click here<img src="../assets/icons/download.svg"></a>
            </div>
        </div>

        <div class="actions">
            <a href="https://www.instagram.com/artmentdep/"><img src="../assets/icons/insta.svg">Instagram</a>
        </div>

    <!--    <a href="#" class="prev">←</a>
        <a href="#" class="next">→</a>-->
    </div>
<?php endforeach ?>
<?php snippet('footer') ?>
