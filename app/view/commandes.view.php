
<h2>Nos commandes</h2>
        <div class="container" id="commandes">
        <?php foreach ($nos_commandes as $biere) : ?>
            <div class="commande">
<table>
<thead>
    <tr>
  <th colspan="1">num_client</th>
  <th colspan="1">adresse</th>
  <th colspan="1">code_postal</th>
  <th colspan="1">ville</th>
  <th colspan="1">mail</th>
  <th colspan="1">quantite</th>
        </tr>
</thead>

<tbody>
        <tr>
            <td><?= $biere['nom'] ?></td>
            <td><?= $biere['prenom'] ?></td>
  <td><?= $biere['adresse'] ?></td>
  <td><?= $biere['code_postal'] ?></td>
            <td><?= $biere['ville'] ?></td>
  <td><?= $biere['mail'] ?></td>
        </tr>
    </tbody>
        </table>






            
            </div>
        <?php endforeach ?>



</main>