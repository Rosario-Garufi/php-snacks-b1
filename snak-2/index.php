<!-- Passare come parametri GET name, 
mail e age e verificare (cercando i metodi
 che non conosciamo nella documentazione) che name sia più 
 lungo di 3 caratteri, che mail contenga un punto e una chiocciola 
 e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
 altrimenti “Accesso negato” -->

 <?php

$name = $_GET['name'];
$email = $_GET['email'];
$eta = $_GET['eta'];
var_dump($name);
var_dump($email);
var_dump($eta);
if(strlen($name < 3) && strpos($email, '.') && strpos($email, '@') && is_numeric($eta)){
    echo "Accesso Riuscito!";
}else{
    echo "Accesso Negato!";
}

?>