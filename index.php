<?php
include_once __DIR__.'/models/Prodotto.php';




var_dump (new Prodotto('supreme2000', 15, 'src', 'cane', 'icona cane', 'gioco'));
var_dump (new Prodotto('sona45', 15, 'src', 'gatto', 'icona gatto', 'cuccia'));



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



    <!-- Boostrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>