<main>
<h1>Nouveau produit</h1>
<div class="container">
    <div class="message">
     
</div>
    <form action="addnewproduit.php" method="post">
    <div>        <label for="type">Type</label>
        <input type="text"  name="type" aria-label="Nom du talent" id="type" required>
    </div>
    <div>        <label for="nom">Nom</label>
        <input type="text"  name="nom" aria-label="Nom du talent" id="nom" required>
    </div>
    <div>        <label for="descr">Description</label>
        <input type="text"  name="descr" aria-label="Nom du talent" id="descr" required>
    </div>
    <div>        <label for="prix">Prix</label>
        <input type=""  name="prix" aria-label="Nom du talent" id="prix" required>
    </div>
    <div>        <label for="taux">Taux d'alcool</label>
        <input type="text"  name="taux" aria-label="Nom du talent" id="taux" required>
    </div>
    <div>        <label for="particul">Particularité</label>
        <input type="text"  name="particul" aria-label="Nom du talent" id="particul" required>
    </div>
    <div>        <label for="ibu">IBU</label>
        <input type="text"  name="ibu" aria-label="Nom du talent" id="ibu" required>
    </div>
    <div>        <label for="volume">Volume</label>
        <input type="text"  name="volume" aria-label="Nom du talent" id="volume" required>
    </div>



        <input type="submit"  value="ajouter" aria-label="Ajouter un client">
    </form>
</div>
</main>