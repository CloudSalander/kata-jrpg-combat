
<?php

class Character {
    public function __construct(private string $name, private int $life, private int $mp, private array $commands){}
    public function useCommand(int $option) {
        //TODO: Should I check valid option?
        $this->commands[$option]->execute($this->name);
    }
}

?>