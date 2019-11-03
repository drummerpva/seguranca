<?php
//$email = addslashes($_POST['email']);
$email = $_POST['email'];
//$senha = md5(addslashes($_POST['senha']));
$senha = md5($_POST['senha']);
try{
    $pdo = new PDO("mysql:dbname=sql_injection;host=localhost;charset=utf8","root","");
} catch (PDOException $ex) {
    die("Erro: ".$ex->getMessage());
}
$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha ";
//$sql = "SELECT * FROM usuarios WHERE email = '' OR '1'='1' AND senha = '' OR '1'='1'";
//$sql = "SELECT * FROM usuarios WHERE email = '' OR '1'='1' //' AND senha = ''";
echo $sql."<br>";
$sql = $pdo->prepare($sql);
$sql->bindValue(":email", $email);
$sql->bindValue(":senha", $senha);
//print_r($sql);
$sql->execute();
if($sql->rowCount()>0){
    echo "logado";
}else{
    echo "Usuario/Senha errados!";
}
