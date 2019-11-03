<?php
//Nunca salvar senha pura! Ex: 1234
//md5, SHA1, SHA256 - Criptografia rápida... sempre usar sistema anti BruteForce - pela velocidade não reocmendado pelo PHP
//PHP recomenda password_hash()= PASSWORD_DEFAULT e PASSWORD_BCRYPT(recomendado) e usa password_verify para verificar - só o PHP usa

//$hash = password_hash("1234", PASSWORD_BCRYPT);
$hash = '$2y$10$f3GA9GOrgTNsOsBQdEfw1uEEtSInnBxJ.rZrnynJ8rcOrjrzNsnva';
echo "<p>password_hash: $hash </p>";
$senha = "1234";
if(password_verify($senha, $hash)){
    echo "Acertou<br/>";
}else{
    echo "Errou<br/>";
}


/*
$hash = md5('1234');
echo "<p>md5: $hash </p>";
echo "<hr>";
$email = "doug@poma.com";
$senha = "1234";
$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
$sql->execute(array($email));
if($sql->rowCount()>0){
    $dados = $sql->fetch();
    if(password_verify($senha, $dados['senha'])){
        echo "Login OK";
    }else{
        echo "Errou Login";
    }
}
*/