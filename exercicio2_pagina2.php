<?php
$virgula = ', ';

if (isset($_POST["nome"])){
        echo "O nome do usuário é " . $_POST['nome'] . '<br>';
    } else {
        echo 'Não foi informado nada ainda!';
    }


if (isset($_POST["endereco"])){
    echo "O endereço completo do usuário é:  " . $_POST['endereco'], $virgula, 
    $_POST['cidade'],$virgula,
    $_POST['bairro'],$virgula,
    $_POST['cep'];
} else {
    echo 'Não foi informado endereço ainda!';
}

?>