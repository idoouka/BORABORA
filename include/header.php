<header> 
  <div> 
    <div>                 	
      <h1 class="text-3a"><a href="/">Le BORA<span>-BORA</span></a></h1> 
      <nav>  
        <ul class="menu">
          <li<?php echo $_SERVER['SCRIPT_NAME'] == '/index.php' ? ' class="current"' : '' ?>>
            <a href="index.php">Accueil</a>
          </li>
          <li<?php echo $_SERVER['SCRIPT_NAME'] == '/a-propos.php' ? ' class="current"' : '' ?>>
            <a href="a-propos.php">A propos</a>
          </li>
          <li<?php echo $_SERVER['SCRIPT_NAME'] == '/nos-prestations.php' ? ' class="current"' : '' ?>>
            <a href="nos-prestations.php">Nos prestations</a>
          </li>
          <li<?php echo $_SERVER['SCRIPT_NAME'] == 'nos-tarifs.php' ? ' class="current"' : '' ?>>
            <a href="nos-tarifs.php">Nos tarifs</a>
          </li>
          <li<?php echo $_SERVER['SCRIPT_NAME'] == 'products.php' ? ' class="current"' : '' ?>>
            <a href="#">Calendrier</a>
          </li>
          <li<?php echo $_SERVER['SCRIPT_NAME'] == 'contacts.php' ? ' class="current"' : '' ?>>
            <a href="#">Contacts</a>
          </li>
            <?php
            if(isset($_SESSION['username'])){

                echo "<li><a class='current' href='connexion/logout.php'>Logout</a></li>";
            }
            else{
                echo "<li><a class='current' href='connexion/login.php'>login</a></li>";
            }
            ?>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
  </div>
</header>