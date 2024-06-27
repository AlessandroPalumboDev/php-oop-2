<?php
require_once __DIR__.'/models/Prodotto.php';
require_once __DIR__.'/models/Categoria.php';
require_once __DIR__.'/models/Tipologia.php';

// $prodotto1 = new Prodotto('crocchette', 15, 'src');
// $prodotto1->setTipo('cane');
// $prodotto1->setIcona('fas fa-dog');
// $prodotto1->setTipologia('cibo');

// categorie
$categoria_cane = new Categoria('cane','<i class="fa-solid fa-dog"></i>');
$categoria_gatto = new Categoria('gatto','<i class="fa-solid fa-cat"></i>');







$prodotto1 = new Prodotto('nome', $categoria_cane);

var_dump($prodotto1);

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Shop</title>
    <!-- Boostrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-uppercase">OOP Shop</h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-wrap">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto1->getNome() ?></h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <!-- Boostrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>