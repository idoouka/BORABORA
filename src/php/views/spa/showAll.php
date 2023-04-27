<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Soin</th>
        <th>Description</th>
        <th>Durée</th>
        <th>Prix</th>
        <th>Type</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($spas as $spa): ?>
        <tr>
            <td><?= $spa->getId() ?></td>
            <td><?= $spa->getSoin() ?></td>
            <td><?= $spa->getDescriptifs() ?></td>
            <td><?= $spa->getDuree() ?></td>
            <td><?= $spa->getPrix() ?></td>
            <td><?= $spa->getType() ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


