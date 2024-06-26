<?php
class Tipologia 
{
    protected string $tipologia;


    // getter e setter di tipologia
    public function __construct(string $_tipologia) {
        $this->tipologia = $_tipologia;
 
    }

    // getter e setter di tipologia
    public function setTipologia(string $_tipologia): void
    {
        $this->tipologia = $_tipologia;
    }
    public function getTipologia(): string
    {
        return $this->tipologia;
    }

}
?>