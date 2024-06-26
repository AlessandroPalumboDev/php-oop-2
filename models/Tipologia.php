<?php
trait Tipologia
{
    protected string $tipologia;


    public function __construct(string $_tipologia) {
        $this->tipologia = $_tipologia;
 
    }

    // getter e setter di tipologia
    public function setTipo(string $_tipologia): void
    {
        $this->tipologia = $_tipologia;
    }
    public function getTipologia(): string
    {
        return $this->tipologia;
    }

}
?>