<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/CreditCard.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Customer.php';

$card_1 = new CreditCard('3489527844932', 'Mastercard', 2022, 260);
$collare = new Product(55, 'accessory', 'dog');
var_dump($collare);
$customer_1 = new Customer('Giacomo', 'Bottaro', $card_1, $signed = true);
var_dump($customer_1);


$customer_1->paymant($collare->price);
var_dump($customer_1);

 ?>

 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <?php echo $collare ?>
 </body>
 </html> -->