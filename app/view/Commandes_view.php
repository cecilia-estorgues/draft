<main>
<h2>Nos dernières commandes !<h2>
    <?php
        mysqli_connect($databaseco);
        $query = "SELECT * FROM commande";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID de commande : " . $row['id_commande'] ;
            echo "Nom du client : " . $row['nom_client'] ;
        }
         
