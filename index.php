<?php 
//TODO:Automatet this includes
include('classes/Command.php');
include('classes/commands/Attack.php');
include('classes/commands/Inventory.php');
include('classes/commands/Magic.php');
include('classes/commands/Invocation.php');
include('classes/Character.php');

$attack = new Attack("Attack");
$object = new Inventory("Object");
$magic = new Magic("Magic");
$invocation = new Invocation("Invoke");

$commands = [$attack,$object,$magic,$invocation];

foreach($commands as $command) {
    echo $command->execute("Cloud");
    echo PHP_EOL;
}

$character1 = new Character("Cloud",7231,453,[$attack,$object]);
$character2 = new Character("Aeris",2332,871,[$magic,$invocation]);
$character3 = new Character("Tifa",6231,653,[$attack,$object,$magic]);

var_dump($character1);


?>