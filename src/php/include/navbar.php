<header>
    <div>
        <div>
            <h1 class="text-3a"><a href="/">Le BORA<span>-BORA</span></a></h1>
            <nav>
                <ul class="menu">
                    <li>
                        <a href="/">Accueil</a>
                    </li>
                    <li>
                        <a href="/about">A propos</a>
                    </li>
                    <li>
                        <a href="/prestations">Nos prestations</a>
                    </li>
                    <li>
                        <a href="/tarifs">Nos tarifs</a>
                    </li>
                    <li>
                        <a href="#">Calendrier</a>
                    </li>
                    <li>
                        <a href="#">Contacts</a>
                    </li>
                    <?php
                    if (isset($_SESSION['username'])) {

                        echo "<li><a class='current' href='/logout'>Logout</a></li>";
                    } else {
                        echo "<li><a class='current' href='/login'>login</a></li>";
                    }
                    ?>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </div>
</header>