
<?php

//Pregunta a clase: Debería dejar que los comandos se actualicen dinámicamente EN ESTE CONTEXTO?
//Otra pregunta: Respeta esta clase la S de SOLID?
class Character {
    public function __construct(private string $name, private int $life, private int $mp, private array $commands){}
    public function useCommand(int $option) {
        //TODO: Should I check valid option?
        $this->commands[$option]->execute();
    }
}

?>