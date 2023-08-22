/*
1 - Crie um programa/página em PHP que atenda aos seguintes pontos:
Tenha um array com cinco ou mais itens
Exiba o conteúdo desse array, linha a linha
*/

<!DOCTYPE html>
<html>
<head>
    <title> Titulo </title>
</head>
<body>
    <h1>10 itens que tem na mochila do Dominy</h1>
    <ul>
        <?php
        // Cria um array com 10 itens
        $mochila_tem = array("Caneta", "Bloco de Notas", "Óculos", "Carteira", 
        "Documentos", "Relógio", "Livros", "Notebook", 
        "Produtos de Higiene Pessoal", "Equipamentos de Trabalho");

        // Exibe cada item em uma linha
        foreach ($mochila_tem as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
</body>
</html>
