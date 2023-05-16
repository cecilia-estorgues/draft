<main>
    <div class="container biere">
        <?php foreach ($nos_produits as $produit) : ?>
            <div class="biere">
                <figure>
                    <a href="">
                        <img src="public/images/pokemon/small/<?= $produit['nom_produit'] ?>.png" alt="<?= $produit['nom_produit'] ?>">
                    </a>
                </figure>
                <div class="description">
                    <p class="pokemon-nom"><?= $produit['nom_produit'] ?></p>
                    <div class="types">
                        <ul>
                            <?php foreach ($produit['particularites'] as $specialite) : ?>
                                <li class="type--<?= convertType2Class($specialite) ?>"><?= $specialite ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</main>