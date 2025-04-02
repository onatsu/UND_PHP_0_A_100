
<?php
require __DIR__ . '/../../vendor/autoload.php';

use App\rpg\Character;

$character_a=Character::createDefaultCharacter("character_a");

$damage=0;
if (isset($_POST["damage"])) $damage=$_POST["damage"];
$character_a->damage($damage);

$heal=0;
if (isset($_POST["heal"])) $heal=$_POST["heal"];
$character_a->


?>
<p>El personaje <?php echo $character_a->getName();?> ha sufrido un daño de <?php echo $damage;?>.</p>
<p>Le quedan <?php echo $character_a->getHealth();?> puntos de vida.</p>
<p>El personaje está <?php echo $character_a->getStatus();?></p>


<form name="rpg_heal" method="POST" action="attack.php">
    <input type="text" name="heal" />
    <input type="submit" value="heal" />

</form>