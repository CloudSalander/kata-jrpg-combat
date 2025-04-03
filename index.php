<?php 
include('classes/Command.php');
include('classes/commands/Attack.php');
$attack = new Attack("Attack");
echo $attack->execute("Cloud");

?>