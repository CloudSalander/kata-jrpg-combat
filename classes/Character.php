
<?php

class Character {
    public function __construct(private string $name, private int $lifePoints, private int $magicPoints, private array $commands){}
    public function useCommand(int $option) {
        //TODO: Should I check valid option?
        $this->commands[$option]->execute($this->name);
    }

    public function getName(): string {
        return $this->name;
    }

    public function getLifePoints(): int {
        return $this->lifePoints;
    }
}

?>