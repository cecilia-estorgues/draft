<main>
    <div class="container biere">
        <?php foreach ($nos_bieres as $biere) : ?>
            <div class="biere">
                <figure>
                    <a href="">
                        <img src="public/images/mockup/<?= $biere['nom_produit'] ?>.png" alt="<?= $biere['nom_produit'] ?>">
                    </a>
                </figure>
                <div class="description">
                    <p class="biere-nom"><?= $biere['nom_produit'] ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <div class="container biere">
        <?php foreach ($nos_goodies as $goodies) : ?>
            <div class="biere">
                <figure>
                    <a href="">
                        <img src="public/images/mockup/<?= $goodies['nom_produit'] ?>.png" alt="<?= $goodies['nom_produit'] ?>">
                    </a>
                </figure>
                <div class="description">
                    <p class="biere-nom"><?= $goodies['nom_produit'] ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</main>