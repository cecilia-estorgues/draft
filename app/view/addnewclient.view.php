<main>
<div class="container">
    <div class="message">
        
</div>
    <form action="addnewclient.php" method="post">
    <div>        <label for="nom">nom</label>
        <input type="text"  name="nom" aria-label="Nom du client" id="nom" required>
    </div>
    <div>        <label for="prenom">prénom</label>
        <input type="text"  name="prenom" aria-label="Prénom du client" id="prenom" required>
    </div>
    <div>        <label for="adresse">adresse</label>
        <input type="text"  name="adresse" aria-label="Adresse du client" id="adresse" required>
    </div>
    <div>        <label for="code_postal">code postal</label>
        <input type="number"  name="code_postal" aria-label="Code postal du client" id="code_postal" required>
    </div>
    <div>        <label for="ville">ville</label>
        <input type="text"  name="ville" aria-label="Ville du client" id="ville" required>
    </div>
    <div>        <label for="email">email</label>
        <input type="text"  name="email" aria-label="Mail du client" id="email" required>
    </div>



        <input type="submit"  value="ajouter" aria-label="Ajouter un client">
    </form>
</div>
</main>