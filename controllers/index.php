<?php

//On appelle la fonction getAll()
$allproducts = Products::getAll();
//On transmets les variables à Smarty
$smarty->assign('allproducts', $allproducts);

?>