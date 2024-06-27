<?php
require_once __DIR__.'/Categoria.php';
class Prodotto 
// extends Categoria
{

    private string $nome;
    private float $prezzo = 0;
    private Categoria $categoria;
  
    

    public function __construct(string $nome, Categoria $categoria) {
        $this->setNome($nome);
        // $this->setCategoria($categoria);
 
    }

    // getter e setter di $nome
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome):void{
        $this->$nome=$nome;
    }

    // getter e setter di $prezzo
    public function getPrezzo():float{
        return $this->$prezzo;
    }
    public function setPrezzo(float $prezzo):void{
        $this->$prezzo=$prezzo;
    }

    // getter e setter di $immagine
    public function getImmagine():?string{
        return $this->$immagine;
    }
    public function setImmagine(string $immagine):void{
        $this->$immagine=$immagine;
    }

    // getter e setter di $categoria
    public function getCategoria():?Categoria{
        return $this->$categoria;
    }
    public function setCategoria(Categoria $categoria):void{
        $this->$categoria = $categoria;
    }


}



?>