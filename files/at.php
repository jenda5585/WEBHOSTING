<?php require('./style/at.php');
 

$DB = "*****";
$DBS = "*****";

$conenction = new PDO('mysql:host=mysql.hostify.cz;dbname='. $DB, $DB, $DBS);
?>
  <div class="at">
    <h2 class="at-jmeno">Náš Admin Team</h2>
    <div class="at-team">

<?php
$query = $conenction->prepare('SELECT username, primary_group FROM luckperms_players');
$query->execute();
foreach($query as $user){
  switch ($user[1]){
    case "majitel":
      echo '<div><h3>'.$user[0].'</h3><div class="button-clen" style="background-color:#aa0000">Administrátor</div><img alt="" src="https://minotar.net/armor/body/'.$user[0].'/720.png"></div>';
      break;
    case "helper":
      echo'<div><h3>'.$user[0].'</h3><div class="button-clen" style="background-color:#55ff55">Helper</div><img alt="" src="https://minotar.net/armor/body/'.$user[0].'/720.png"></div>';
      break;
    case "builder":
      echo '<div><h3>'.$user[0].'</h3><div class="button-clen" style="background-color:#3232c1">Builder</div><img alt="" src="https://minotar.net/armor/body/'.$user[0].'/720.png"></div>';
      break;
    case "zk_helper":
      echo '<div><h3>'.$user[0].'</h3><div class="button-clen" style="background-color:#55ff55">Zk. Helper</div><img alt="" src="https://minotar.net/armor/body/'.$user[0].'/720.png"></div>';
      break;
    case "zk_builder":
      echo '<div><h3>'.$user[0].'</h3><div class="button-clen" style="background-color:#3232c1">Zk. Builder</div><img alt="" src="https://minotar.net/armor/body/'.$user[0].'/720.png"></div>';
      break;
    case "moderator":
      echo '<div><h3>'.$user[0].'</h3><div class="button-clen" style="background-color:#ffa500">Moderátor</div><img alt="" src="https://minotar.net/armor/body/'.$user[0].'/720.png"></div>';
      break;
    }  
}
?>
    </div>
  </div>