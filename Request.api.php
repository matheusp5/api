<?php

if(isset($_POST)) {
    if(isset($_POST['submit_POST'])) {
        if(!empty($_POST['username_POST'])) {
            $Username = addslashes($_POST['username_POST']);
            $ApiURL = 'http://localhost/API/Create.api.php?username=' . $Username;
            $ApiResult = json_decode(file_get_contents($ApiURL));
            echo "Email: " . $ApiResult->email . "<br>";
            echo "ID: " . $ApiResult->id . "<br>";
            echo "Telefone: " . $ApiResult->telefone . "<br>";
            echo "Data de Criacao: " . $ApiResult->data_criacao;
        } else {
            echo "Preencha com o username";
        }
    }
}
 

?>

<form action="" method="post">
    <input type="text" name="username_POST" placeholder="Insira o Username">
    <input type="submit" name="submit_POST">
</form>