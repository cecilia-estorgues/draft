<main>
    <div class="content">
        <div id="img">
            <?php if($produit['type']=='biere') : ?>
                <img src="public/images/produit/<?= $nomproduit?>.png" alt="<?= $produit['nom_produit']?>">
            <?php else : ?>
                <img src="public/images/goodies/Base/<?= $produit['nom_produit'] ?>.png" alt="<?= $produit['nom_produit']?>">
            <?php endif ?>
        </div>
        <div id="droite">
            <div id="titre">
                <h1 id="head"><?= $nomproduit ?></h1>
                <p id="vol"><?=$produit['volume'] ?></p>
            </div>
            <div id="description"><p><?=$produit['description']?></p></div>
    
            <?php if($produit['type']=='biere') : ?>
                <div id="cara">
                    <span>Données techniques :</span>
                     <ul>
                        <li>IBU : <?=$produit['ibu']?></li>
                        <li>Particularité : <?=$produit['particularite']?></li>
                        <li>Degré : <?=$produit['taux_alcool']?></li>
                    </ul>
                </div>
            <?php endif ?>
            <div id="boutons">
                <div class="bouton" id="achat"><a href="formulaire.php">Acheter</a></div>
                <div class="bouton"><?= $produit['prix'] ?></div>
            </div>
        </div>
    </div>
</main>