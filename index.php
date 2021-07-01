<?php
require_once __DIR__ ."/traits-exceptions/Traits.php";
require_once __DIR__ ."/classes/Product.php";
require_once __DIR__ ."/classes/Users.php";
require_once __DIR__ ."/classes/CartItem.php";
require_once __DIR__ ."/classes/Cart.php";
require_once __DIR__ ."/classes/CreditCard.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

foreach ($trialCart as $key => $value) {
    ?><h3>Nome prodotto: <span><?php echo $value->getName(); ?></span></h3><?php
    ?><h4>Quantità richiesta: <span><?php echo $value->getQty(); ?></span></h4><?php
   
   
}

?>
</body>
</html>