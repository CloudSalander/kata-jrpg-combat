<?php  
class Party {
    public function __construct(private array $characters){}
    public function getWeakerCharacter(): Character {
        $weakerCharacter = $this->characters[0];
        //Is it really necessary this loop? Why i = 1?
        for($i = 1; $i < count($this->characters); ++$i) {
            //Why  "<" and not "<="?
            if($this->characters[$i]->getLifePoints() < $weakerCharacter->getLifePoints()) $weakerCharacter = $this->characters[$i];         
        }
        return $weakerCharacter;
    }
}

?>