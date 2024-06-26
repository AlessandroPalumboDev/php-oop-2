<?php
include_once __DIR__.'/models/Prodotto.php';

$prodotto1 = new Prodotto('crocchette', 15, 'src');
$prodotto1->setTipo('cane');
$prodotto1->setIcona('fas fa-dog');
$prodotto1->setTipologia('cibo');




?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Shop</title>
    <!-- Boostrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
                <div class="col">
                        <div class="card">
                            <h3>
                                <?php var_dump ( $prodotto1) ?>
                            </h3>
                        </div>
                </div>
            </div>
        </div>
    </main>



    <!-- Boostrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>