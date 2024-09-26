<?php
require('./config/main.php');
require('./style/navbar.php')
?>
<nav class="navbar">
        <a href="../"><img class="navbar-logo" src="<?php echo"$logo";?>"></a>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="https://discord.gg/K8WTT8MC9Z" target="_blank">Discord <i style="font-size:125%;" class="fa-brands fa-discord" aria-hidden="true"></i></a></li>
            <li><a href="./hlasovani.php">Hlasování <i style="font-size:125%;" class="fa-solid fa-coins" aria-hidden="true"></i></a></li>
            <!-- <li><a href="https://store.tropicland.eu" target="_blank">Store <i style="font-size:125%;" class="fa-solid fa-store" aria-hidden="true"></i></a></li> -->
            <li><a href="./dynmap.php">Dynmapy <i style="font-size:125%;" class="fa-solid fa-map-location-dot" aria-hidden="true"></i></a></li>
            <li><a href="./adminteam.php">Admin Team <i style="font-size:125%;" class="fa-solid fa-users" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </nav>