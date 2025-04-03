<?php
class Inventory extends Command {
    public function execute(string $characterName) {
        echo $characterName." used an object!";
    }
}
?>