<div>
    <ul class="list-2 top-5">
        <?php
        $moitie = ceil($nb_categories / 2);
        reset($prix_par_categorie);

        for ($cpt = 0; $cpt < $moitie; $cpt++) {
            ?>
            <li>
                <?php echo key($prix_par_categorie); ?>
                <ul>
                    <?php foreach (current($prix_par_categorie) as $consommation) { ?>
                        <li><?php echo $consommation['libelle'] . ' => ' . $consommation['prix'] ?></li>
                    <?php } ?>
                </ul>
            </li>
            <?php next($prix_par_categorie);
        } ?>
    </ul>
</div>
