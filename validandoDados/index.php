<?php
//filter_var
//filter_input
//filter_list
/*
 * FILTER_VALIDATE_INT
 * FILTER_VALIDATE_BOOLEAN
 * FILTER_VALIDATE_FLOAT
 * FILTER_VALIDATE_URL
 * FILTER_VALIDATE_EMAIL
 * FILTER_VALIDATE_REGEX
 * FILTER_VALIDATE_IP
 * 
 * FILTER_SANITIZE_STRING - TRANSFORMA EM STRING
 * FILTER_SANITIZE_ENCODED - TRANSFORMA CARACTERES ESPECIAIS
 * FILTER_SANITIZE_SPECIA_CHARS - TRANSFORMA HTML EM TEXTO
 */

$email = "douglas.poma@registrallogistica.com.br";
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "<p>É email!</p>";
}else{
    echo "<p>Não é email!</p>";
}
$num = 10;
if(filter_var($num,FILTER_VALIDATE_INT)){
    echo "<p>É Inteiro!</p>";
}else{
    echo "<p>Não é Inteiro!</p>";
}
$html = "<body>Olá!</body><?phptete?>";
$html = strip_tags($html);
//$html = filter_var($html,FILTER_SANITIZE_SPECIAL_CHARS);
echo "<p>$html</p>";

if(!empty($_GET['email'])){
    $nome = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
    echo "<p>Nome: $nome</p>";
}

$prioridade = filter_input(INPUT_POST, 'prioridade', FILTER_VALIDATE_INT,array(
    'options' => array(
        'min_range'=> 1,
        'max_range'=> 4,
        'default' => 1
    )
));
echo "Prioridade : ".$prioridade;
?>

<form method="POST">
    <select name="prioridade">
        <option value="1">Prioridade 1</option>
        <option value="2">Prioridade 2</option>
        <option value="3">Prioridade 3</option>
        <option value="4">Prioridade 4</option>
    </select><br/>
    <input type="submit" value="Enviar"/>
    
</form>