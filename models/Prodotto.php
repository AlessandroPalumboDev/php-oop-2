<?php
trait Prodotto
{
    protected string $nome;
    protected int $prezzo;
    protected string $immagine;
    protected string $icona;
  
    

    public function __construct(string $nome, int $prezzo, string $immagine, string $icona) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->icona = $icona;
 
    }

    // getter e setter di $nome
    public function getNome():string{
        return $this->$nome;
    }
    public function setNome(string $nome):void{
        $this->$nome=$$nome;
    }

    // getter e setter di $prezzo
    public function getPrezzo():int{
        return $this->$prezzo;
    }
    public function setPrezzo(int $prezzo):void{
        $this->$prezzo=$$prezzo;
    }

    // getter e setter di $immagine
    public function getImmagine():string{
        return $this->$immagine;
    }
    public function setImmagine(string $immagine):void{
        $this->$immagine=$$immagine;
    }
    
    // getter e setter di $icona
    public function getIcona():string{
        return $this->$icona;
    }
    public function setIcona(string $icona):void{
        $this->$icona=$$icona;
    }


}
?>