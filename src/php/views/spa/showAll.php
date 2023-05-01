<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Soin</th>
        <th>Description</th>
        <th>Durée</th>
        <th>Prix</th>
        <th>Type</th>
        <th>Actions</th>
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
            <td><a href="/reservation?id=<?= $spa->getId() ?>">Réserver</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


