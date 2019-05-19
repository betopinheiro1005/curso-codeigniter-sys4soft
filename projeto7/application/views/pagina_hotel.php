<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    // echo 'Hotel escolhido: ' . $hotel['nome_hotel'];

?>

<div class="container text-center p-4">
    <!-- botão Voltar -->
    <a class="btn btn-primary" href="<?php echo site_url('geral') ?>">Voltar</a>

    <!-- nome do hotel -->
    <h3 class="p-3"><?php echo $hotel['nome_hotel'] ?></h3>

    <!-- descrição do hotel -->
    <p><?php echo $hotel['descricao'] ?></p>

    <!-- imagem do hotel -->
    <img src="<?php echo base_url('assets/imagens/') . $hotel['imagem'] ?>">

</div>