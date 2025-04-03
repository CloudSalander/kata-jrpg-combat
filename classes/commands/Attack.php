<?php
class Attack Extends Command {
    public function execute(string $characterName) {
        echo $characterName." attacked!";
    }
}
?>