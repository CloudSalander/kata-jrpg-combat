<?php
abstract class Command {
    //TODO:Maybe we can use Class name?
    public function __construct(private string $name){}
    public function getName(): string {
        return $this->name;
    } 
    public abstract function execute(string $characterName);
}
?>