<?php

require_once __DIR__ ."/classes/Product.php";
require_once __DIR__ ."/classes/Users.php";
require_once __DIR__ ."/classes/CreditCard.php";
require_once __DIR__ ."/classes/Cart.php";
require_once __DIR__ ."/classes/CartItem.php";
require_once __DIR__ ."/traits-exceptions/Traits.php";

$tcl = new Television(12, "TCL Silver", 290, 1, 55, "OLED");
var_dump($tcl);