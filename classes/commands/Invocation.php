<?php
class Invocation extends Command {
    public function execute(string $characterName) {
        echo $characterName." invocated a spirit!";
    }
}
?>