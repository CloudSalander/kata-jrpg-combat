<?php 
//TODO:Automatet this includes
include('classes/Command.php');
include('classes/commands/Attack.php');
include('classes/commands/Inventory.php');
include('classes/commands/Magic.php');
include('classes/commands/Invocation.php');

$attack = new Attack("Attack");
$object = new Inventory("Object");
$magic = new Magic("Magic");
$invocation = new Invocation("Invoke");

$commands = [$attack,$object,$magic,$invocation];

foreach($commands as $command) {
    echo $command->execute("Cloud");
    echo PHP_EOL;
}

?>