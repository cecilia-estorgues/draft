<main>
<h2>Nos commandes</h2>
        <div class="container" id="commande">
        <?php foreach ($nos_commandes as $biere) : ?>
            <div class="commande">
<table>
<thead>
    <tr>
  <th colspan="1">num_commande</th>
  <th colspan="1">date</th>
  <th colspan="1">num_client</th>
  <th colspan="1">quantite</th>
  <th colspan="1">reference</th>
        </tr>
</thead>

<tbody>
        <tr>
            <td><?= $biere['num_commande'] ?></td>
            <td><?= $biere['date_commande'] ?></td>
  <td><?= $biere['num_client'] ?></td>
  <td><?= $biere['quantite'] ?></td>
            <td><?= $biere['reference'] ?></td>
        </tr>
    </tbody>
        </table>






            
            </div>
        <?php endforeach ?>



</main>