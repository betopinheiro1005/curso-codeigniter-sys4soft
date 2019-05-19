<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base de dados</title>
</head>
<body>
    
    <!-- formulário -->
    <form action="<?php echo site_url('geral/gravar')?>" method="post">

        <label>Nome:</label><br>        
        <input type="text" name="text_nome"><br>

        <label>Telefone:</label><br>
        <input type="text" name="text_telefone"><br><br>

        <input type="submit" value="Gravar">

    </form>

    <hr>

    <?php if(count($dados)==0) : ?>
        <p>Não existem contactos registados.</p>
    <?php else: ?>
        <?php foreach($dados as $contacto) : ?>
            <p><?php echo $contacto['nome'] . ' - ' . $contacto['telefone']; ?></p>
        <?php endforeach;?>
    <?php endif; ?>


</body>
</html>