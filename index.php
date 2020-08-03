<?php

require_once "vendor/autoload.php";

use ave\cep\Search;

$busca = new Search; 

?>

<form action="index.php" method="get">
    
    <label>Insira seu cep para consultar </label>
    <p>CEP : <input type="text" name="cep" /></p>
    <p><input type="submit" value="Conferir"/></p>
</form>

<?php
       $resultado = $busca->getAdressFromZipCode($_GET['cep']);
       print_r($resultado); 
    ?>

