<main>
     <h2>Nos bières</h2>
        <div class="container" id="bieres">
        <?php foreach ($nos_bieres as $biere) : ?>
            <div class="biere">
                <figure>
                    <a href="">
                        <img src="public/images/mockup/<?= $biere['nom_produit'] ?>.png" alt="<?= $biere['nom_produit'] ?>">
                    </a>
                </figure>

                    <p class="biere-nom"><?= $biere['nom_produit'] ?></p>

            </div>
        <?php endforeach ?>
    </div>
    <div class="container" id="goodies">
        <h2>Nos goodies</h2>
        <?php foreach ($nos_goodies as $goodies) : ?>
            <div class="goodies">
                <figure>
                    <a href="">
                        <img src="public/images/goodies/<?= $goodies['nom_produit'] ?>.png" alt="<?= $goodies['nom_produit'] ?>">
                    </a>
                </figure>
                    <p class="goodies-nom"><?= $goodies['nom_produit'] ?></p>
            </div>
        <?php endforeach ?>
    </div>
</main>