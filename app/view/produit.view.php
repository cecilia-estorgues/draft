<main>
    <div>
        <h1 id="head"><span><?= $nomproduit ?></span></h1>
        <p><?=$produit['volume'] ?></p>
    </div>
    <div>
        <div id="img">
        <?php if($produit['type']=='biere') : ?>
            <img src="public/images/mockup/<?= $nomproduit?>.png" alt="<?= $produit['nom_produit']?>">
        <?php else : ?>
            <img src="public/images/goodies/<?= $produit['nom_produit'] ?>.png" alt="<?= $produit['nom_produit']?>">
        <?php endif ?>
        </div>
        <div id="description"><p><?=$produit['description']?></p></div>
    </div>
<?php if($produit['type']=='biere') : ?>
    <div id="cara">
        <span>Données techniques :</span>
        <ul>
            <li>IBU : <?=$produit['ibu']?></li>
            <li>Saveur : <?=$produit['particularite']?></li>
            <li> Degré : <?=$produit['taux_alcool']?></li>
        </ul>
    </div>
<?php endif ?>
    <div id="boutons">
        <div class="bouton">Acheter</div>
        <div class="bouton"><?= $produit['prix'] ?></div>
    </div>
</main>