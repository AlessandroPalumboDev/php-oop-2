<?php
trait Categoria
{
    protected string $tipo;
    protected string $icona;


    public function __construct(string $_tipo, string $_icona) {
        $this->tipo = $_tipo;
        $this->icona = $_icona;
 
    }

    // getter e setter di tipo
    public function setTipo(string $_tipo): void
    {
        $this->tipo = $_tipo;
    }
    public function getTipo(): string
    {
        return $this->tipo;
    }


    // getter e setter di iconaa
    public function setIcona(string $_icona): void
    {
        $this->icona = $_icona;
    }
    public function getIcona(): string
    {
        return $this->icona;
    }
}
?>