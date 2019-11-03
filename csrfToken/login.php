<?php
session_start();
//anti form spophing
if (empty($_SESSION['csrfToken'])) {
    $_SESSION['csrfToken'] = md5(time() . rand(0, 999));
}


if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    if (!$_POST['token'] == $_SESSION['csrfToken']) {
        die("Anti-Spoofing");
    } else {

        if ($email == "doug@poma.com" && $senha == "1234") {
            echo "<p>Acesso Ok</p>";
            unset($_SESSION['loginTentativas']);
        } else {
            if (empty($_SESSION['loginTentativas'])) {
                $_SESSION['loginTentativas'] = 0;
            }
            $_SESSION['loginTentativas'] ++;
            echo "<p>Senha inválida - Tentativas: " . $_SESSION['loginTentativas'] . "</p>";
        }
    }
    echo "<hr/>";
}
?>

<form method="POST" action="">
    E-mail:<br/>
    <input type="email" name="email"/><br/><br/>
    Senha:<br/>
    <input type="password" name="senha"/><br/><br/>
    <input type="hidden" name="token" value="<?php echo $_SESSION['csrfToken']; ?>" />
    <input type="submit" value="Entrar"/>

</form>