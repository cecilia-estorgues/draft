<main>
     <h2>Nos bières</h2>
        <div class="container" id="bieres">
        <?php foreach ($nos_bieres as $biere) : ?>
            <div class="biere">

                    <a href="produit.php?nom=<?= $biere['nom_produit']?>">
                        <img src="public/images/mockup/<?= $biere['nom_produit'] ?>ink.png" alt="<?= $biere['nom_produit'] ?>">
                    </a>


                    <h4><?= $biere['nom_produit'] ?></h4>

            </div>
        <?php endforeach ?>
    </div>
            <h2>Nos goodies</h2>
    <div class="container" id="goodies">

        <?php foreach ($nos_goodies as $goodies) : ?>
            <div class="goodies">

                    <a href="produit.php?nom=<?= $goodies['nom_produit']?>">
                        <img src="public/images/goodies/<?= $goodies['nom_produit'] ?>.png" alt="<?= $goodies['nom_produit'] ?>">
                    </a>

                    <h4><?= $goodies['nom_produit'] ?></h4>
            </div>
        <?php endforeach ?>
    </div>
</main>