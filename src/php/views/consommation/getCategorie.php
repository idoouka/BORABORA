<h1>Contenu de la catégorie <?php echo $choice; ?></h1>
<table>
    <thead>
    <tr>
        <th>Libellé</th>
        <th>Prix</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($consommations as $consommation) { ?>
        <tr>
            <td><?php echo $consommation['lib_cons']; ?></td>
            <td><?php echo $consommation['prix_cons']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
