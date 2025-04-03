<?php
//Can't use Object name for a class. Is a keyword in PHP, and many other languages :P
class Attack Extends Command {
    public function execute(string $characterName) {
        echo $characterName." attacked!";
    }
}
?>