<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiCelulares</title>
</head>
<body>
    <button><a href="celular-form.php" style="text-decoration: none;">adcionar celular</a></button>
    <?php require_once 'includes/lojas.php' ?>
    <h1>GuiCelulares</h1>
    <hr>
    <table>
        <?php 
        $busca = $l->query('select * from celulares');
        if (!$busca){
            echo 'erro';
        } else {
            if ($busca->num_rows == 0){
                echo 'erro';
            } else {
                while ($reg=$busca->fetch_object()){
                    echo "<tr><td><a href='pagina-celular.php?i=$reg->id'><img src='$reg->imagem' width='200'></a></td><td>$reg->nome</td></tr>";
                }
            }
        }
        ?>
    </table>
</body>
</html>