<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c); -->

<?php 
    require_once __DIR__ . "/classes/Category.php"; 
    require_once __DIR__ . "/classes/Product.php" ;
    require_once __DIR__ . "/classes/User.php"; 

    // $product1 = new Product("Aggeggio", "NIke", "3€", "", "qui ci va la descrizione", "alimentari"); 
    // var_dump($product1);
    
    // $user1 = new User("Michela", "franchini", "michela@gmail.com", "30"); 
    // var_dump($user1); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
</head>
<body>
    <div>
        <?php $product1 = new Product("Aggeggio", "NIke", "30", "", "qui ci va la descrizione", "alimentari"); 
        var_dump($product1);
        ?>

        <h2><?= $product1->productName ?></h2>
        <h2><?= $product1->brand ?></h2>
        <h2><?= $product1->price ?></h2>
        <h2><?= $product1->description ?></h2>
        <h2><?= $product1->discount?></h2>
        <h2><?= $product1->finalPrice() ?></h2>

    </div>
</body>
</html>