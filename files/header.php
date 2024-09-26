<?php require('./style/header.php');?>
<header id="header">
<?php require('./files/navbar.php');?>
<div style="text-align: right;width: 55%;">
<img style="border-radius: 25px;" src="<?php echo"$logo";?>" alt="logo" class="logo-serveru">
</div>
<h2 class="nazev-serveru"><?php echo"$nazev";?></h2>
<h2 class="popis-serveru">Hráčů online: <?php
$ip1 = 'mc.tropicland.eu';
$status1 = json_decode(file_get_contents('https://api.mcsrvstat.us/2/' .$ip1));

    if ($status1->online == 1) {
      echo $status1->players->online; 
    }  
      else {
        echo "?";
    } 
    ?>/<?php
    if ($status1->online == 1) {
      echo $status1->players->max;
    }  
      else {
        echo "?"; 
    } 
    ?></h2><br>
<h2 class="popis-serveru"><?php echo"$popis";?></h2>
<button class="button-82-pushable" role="button" onclick="copy()" data-toggle="modal" data-target="#success_tic">
  <span class="button-82-shadow"></span>
  <span class="button-82-edge"></span>
  <span class="button-82-front text">
    Klikni pro zkopírování IP
  </span>
</button>
</header>