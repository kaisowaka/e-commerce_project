<?php

//On appelle la fonction getAll()
$allproducts = Product::getAll();
//On transmets les variables à Smarty
echo($allproducts);
$smarty->assign('allproducts', $allproducts);

?>