<?php

/*
 * Gerar nome de arquivo aleatorio
 * verificar o tipo do arquivo e não apenas a extensão usando o type do arquivo - mimetypes
 * 
 */
if(!empty($_FILES['foto']['tmp_name'])){
    $ext = explode(".",$_FILES['foto']['name']);
    $ext = end($ext);
    //echo "<p>".$_FILES['foto']['type']."</p>";
    //verificar o mimeType
    if($_FILES['foto']['type'] == 'image/jpeg'){
        echo "Imagem!";
        $nome = md5(rand(0, 9999).time());
        move_uploaded_file($_FILES['foto']['tmp_name'], "fotos/".$nome.".".$ext);
    echo "Foto carregada com sucesso!";
    }else{
        echo "Erro... é um Arquivo!";
    }
    
    
    /*
    if($ext == 'jpg'){
        echo "é imagem<br>";
    }else{
        echo "não é imagem";
    }
     */
     
    
}