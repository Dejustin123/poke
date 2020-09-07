<link rel="stylesheet" href="style.css" type="text/css">
<?php


require 'Pokebattle.php';


$Pikachu = new current('Pikachu', 'Lightning', '60', '60', new attacks('Electric Ring', '50', 'Lightning'), new attacks('Pika Punch', '20', 'Normal'), '70', new resistance('70', '40'), new weakness('Fire', '1,5'),'230 volt');

// $Charmeleon = new Pokemon('Charmeleon ', 'Fire', '60', '60', new attacks('Head Butt', '10', 'Normal'), new attacks('Flare', '30', 'Fire'), '40', new resistance('70', '40'), new weakness('Water', '1,5'));

$Charmeleon = new temperature('Charmeleon ', 'Fire', '60', '60',new attacks('Head Butt', '10', 'Normal'), new attacks('Flare', '30', 'Fire'), '40', new resistance('70', '40'), new weakness('Water', '1,5'),'254');

echo "voorbeeld van inheritance". "<br>";
echo "name: ". $Charmeleon->getName() . '<br>';
echo "temperature:". $Charmeleon->getTemperature() . "<br>";
echo "name: ". $Pikachu->getName() . '<br>';
echo "Current:". $Pikachu->getCurrent() . "<br>";
echo  "<br>";


echo "<div id='poke-int'>";
echo "Naam: ". $Pikachu->getName() . '<br>';
echo "Levens: " . $Pikachu->getHealth() . "<br>";
echo "Aanvallen: <br>";
echo  "<br>";
echo $Pikachu->getAttack1()->getName() . "<br>";
echo $Pikachu->getAttack1()->getDamage() . "<br>";
echo $Pikachu->getAttack1()->getType() . "<br>";
echo  "<br>";
echo $Pikachu->getAttack2()->getName() . "<br>";
echo $Pikachu->getAttack2()->getDamage() . "<br>";
echo $Pikachu->getAttack2()->getType() . "<br>";
echo  "<br>";
echo "weakness: " . $Pikachu->getWeakness()->getName() . "<br>";
echo  "Zwakte Multiplier: " . $Pikachu->getWeakness()->getMultiplier() . "<br>";
echo "strength: " . $Pikachu->getResistance()->getAPSValue() . "<br>";
echo  "weakness Multiplier: " . $Pikachu->getResistance()->getspAPSValue() . "<br>";
echo  "<br>";
echo "name: ". $Charmeleon->getName() . '<br>';
echo "hp: " . $Charmeleon->getHealth() . "<br>";
echo "attacks: <br>";
echo  "<br>";
echo $Charmeleon->getAttack1()->getName() . "<br>";
echo $Charmeleon->getAttack1()->getDamage() . "<br>";
echo $Charmeleon->getAttack1()->getType() . "<br>";
echo  "<br>";
echo $Charmeleon->getAttack2()->getName() . "<br>";
echo $Charmeleon->getAttack2()->getDamage() . "<br>";
echo $Charmeleon->getAttack2()->getType() . "<br>";
echo  "<br>";
echo "weakness: " . $Charmeleon->getWeakness()->getName() . "<br>";
echo  "weakness Multiplier: " . $Charmeleon->getWeakness()->getMultiplier() . "<br>";
echo "strength: " . $Charmeleon->getResistance()->getAPSValue() . "<br>";
echo  "weakness Multiplier: " . $Charmeleon->getResistance()->getSpAPSValue() . "<br>";
echo  "<br>";
echo "</div>";
echo $Pikachu->getName() . " uses " . $Pikachu->getAttack1()->getName() . ". <br>";
echo $Charmeleon->getName() . " has " . $Pikachu->getAttack1()->getDamage() . " taken damage <br>";
$Charmeleon->setHealth($Charmeleon->getHealth() - $Pikachu->getAttack1()->getDamage());
echo $Charmeleon->getName() .' hp: ' . $Charmeleon->getHealth();
echo"<br>";
echo $Charmeleon->getName() . " uses " . $Charmeleon->getAttack2()->getName() . ". <br>";


if ($Pikachu->getWeakness()->getName() === $Charmeleon->getAttack2()->getType())
{
    echo $Pikachu->getName() . " has " . $Charmeleon->getAttack1()->getDamage() . " taken damage<br>";
    $Pikachu->setHealth($Pikachu->getHealth() - $Charmeleon->getAttack1()->getDamage());
    echo $Pikachu->getName() .' hp: ' . $Pikachu->getHealth();
}


echo $Pikachu->getName() . " uses" . $Pikachu->getAttack2()->getName() . ". <br>";
echo $Charmeleon->getName() . " has " . $Pikachu->getAttack2()->getDamage() . " taken damage <br>";
$Charmeleon->setHealth($Charmeleon->getHealth() - $Pikachu->getAttack2()->getDamage());
echo $Charmeleon->getName() .' hp: ' . $Charmeleon->getHealth();


if ($Pikachu->getHealth() <= 0){
    echo $Pikachu->getName() . $Charmeleon->getName() . " wins";
}


if ($Charmeleon->getHealth() <= 0){
    echo $Charmeleon->getName() . $Pikachu->getName() . " wins";
}