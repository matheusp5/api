<?php

if(isset($_POST)) {
    if(isset($_POST['submit_POST'])) {
        if(!empty($_POST['cep_POST'])) {
            $CEP = addslashes($_POST['cep_POST']);
            $ApiResult = json_decode(file_get_contents("https://viacep.com.br/ws/$CEP/json/"));
            print_r($ApiResult);
        } else {
            echo "Por favor, preencha o campo!";
        }
    }
}

?>

<form action="" method="post">
    <input type="text" name="cep_POST" placeholder="Insira o CEP">
    <input type="submit" name="submit_POST">
</form>