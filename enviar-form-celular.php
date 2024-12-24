<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiCelulares</title>
</head>
<body>
    <?php 
    require_once 'includes/lojas.php';
    $n = $_POST['nome'];
    $e = $_POST['especificacoes'];
    $p = $_POST['preco'];
    $i = $_POST['imagem'];
    if ($l->query("INSERT INTO `celulares` (`id`, `nome`, `especificações`, `preço`, `imagem`) VALUES (DEFAULT, '$n', '$e', '$p', '$i')") == true){
        echo 'celular adcionado com sucesso';
    } else {
        echo 'erro ao inserir dados';
    }
    ?>
</body>
</html>