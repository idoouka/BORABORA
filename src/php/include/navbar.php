<style>
    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    nav li {
        position: relative;
    }

    nav ul ul {
        display: none;
        position: absolute;
        top: 100%;
        left: -20px;
        width: calc(100% + 50px);
        height: calc(100% + 100px);
        z-index: 1;
        background-color: #323337;
    }

    nav ul li:hover > ul {
        display: inherit;
    }

</style>
<!------------------------------------------------------------------------------------------------------------------>
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
                        <a href="#">Services</a>
                        <ul>
                            <li>
                                <a href="/prestations">Nos prestations</a>
                            </li>
                            <li>
                                <a href="/tarifs">Nos tarifs</a>
                            </li>
                            <li>
                                <a href="/spa">Spa</a>
                            </li>
                        </ul>
                    </li>
                    <?php
                    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
                        echo "<li><a class='current' href='/dashboard'>Dashboard</a></li>";
                    }
                    ?>
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