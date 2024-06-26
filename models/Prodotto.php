<?php
include_once __DIR__.'/Categoria.php';
class Prodotto extends Categoria
{

    private string $nome;
    private int $prezzo;
    private string $immagine;
  
    

    public function __construct(string $nome, int $prezzo, string $immagine) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
 
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
        $this->$immagine=$immagine;
    }








}
?>