<main>

<h2>Nos clients</h2>
        <div class="container" id="client">
        <?php foreach ($nos_clients as $biere) : ?>
            <div class="client">
<table>
<thead>
    <tr>
    <th colspan="1">Nom</th>
  <th colspan="1">Prenom</th>
  <th colspan="1">adresse</th>
  <th colspan="1">code_postal</th>
  <th colspan="1">ville</th>
  <th colspan="1">mail</th>
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