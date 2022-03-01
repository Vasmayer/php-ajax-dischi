<?php
/* 
Stampare a schermo una decina di dischi musicali
 (vedi screenshot).
Utilizzare:
Html, CSS, VueJS, axios, PHP
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, 
che stampa direttamente i dischi in pagina: 
al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di axios:
al caricamento della pagina axios chiederà, 
attraverso una chiamata api, 
i dischi  e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, 
filtrare gli album per genere

*/


include 'data/data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css" integrity="sha512-NZ19NrT58XPK5sXqXnnvtf9T5kLXSzGQlVZL9taZWeTBtXoN3xIfTdxbkQh6QSoJfJgpojRqMfhyqBAAEeiXcA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
            <img src="assets/img/logo.png" alt="Logo Spotify" class="img-fluid">
    </header>
    <main class="mt-5">
        <div class="container">
            <div class="row g-5">
                <?php foreach($database as $key => $song):?>
                    <div class="col-2 <?= $key % 5 === 0 ? 'offset-1' : '' ?>">
                        <div class="card">
                            <img src="<?= $song['poster']?>" alt="song" class="img-fluid">
                            <div class="info">
                                <div class="title mt-3">
                                    <?= $song['title']?>
                                </div>
                                <div class="author mt-3">
                                    <?= $song['author']?>
                                </div>
                                <div class="year">
                                    <?= $song['year']?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.min.js" integrity="sha512-Pv/SmxhkTB6tWGQWDa6gHgJpfBdIpyUy59QkbshS1948GRmj6WgZz18PaDMOqaEyKLRAvgil7sx/WACNGE4Txw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>