<?php
/*
2 - Criar uma página PHP que contenha:

Um formulário com uma caixa de texto (input type=”text”) para Nome e outra para Endereço
Um botão para submeter
Ao submeter a página, deve ser exibido o Nome e o Endereço digitado
Usar método POST!
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio2_pagina2.php" method="POST">
        <div>
        <label for="nome">Nome:</label>
            <input type="text" name="nome"><br>

            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco"><br>

            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade"><br>

            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro"><br>

            <label for="cep">CEP:</label>
            <input type="text" name="cep"><br>

            <input type="submit" value="Enviar">
         </div>
    </form>
  
</body>
</html>