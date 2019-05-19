<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo site_url('geral/tratarformulario'); ?>" method="post">
        <span>Nome:</span><br>        
        <input type="text" name="text_nome"><br>

        <span>telefone:</span><br>
        <input type="text" name="text_telefone"><br><br>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>