<main>
<h1>Nouveau client</h1>
<div class="container">
    <div class="message">
        
</div>
    <form action="addnewclient.php" method="post">
    <div>        <label for="nom">Nom</label>
        <input type="text"  name="nom" aria-label="Nom du client" id="nom" required>
    </div>
    <div>        <label for="prenom">Prénom</label>
        <input type="text"  name="prenom" aria-label="Prénom du client" id="prenom" required>
    </div>
    <div>        <label for="adresse">Adresse</label>
        <input type="text"  name="adresse" aria-label="Adresse du client" id="adresse" required>
    </div>
    <div>        <label for="code_postal">Code postal</label>
        <input type="number"  name="code_postal" aria-label="Code postal du client" id="code_postal" required>
    </div>
    <div>        <label for="ville">Ville</label>
        <input type="text"  name="ville" aria-label="Ville du client" id="ville" required>
    </div>
    <div>        <label for="email">Email</label>
        <input type="text"  name="email" aria-label="Mail du client" id="email" required>
    </div>



        <input class="button" type="submit"  value="ajouter" aria-label="Ajouter un client">
    </form>
</div>
</main>