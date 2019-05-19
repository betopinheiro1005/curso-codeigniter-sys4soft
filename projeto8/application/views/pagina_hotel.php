<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container text-center p-4">

    <!-- botão voltar -->
    <a href="<?php echo site_url('geral') ?>" class="btn btn-primary">Voltar</a>

    <!-- nome do hotel -->
    <h3 class="p-3"><?php echo $hotel['nome_hotel'] ?></h3>

    <!-- descrição do hotel -->
    <p><?php echo $hotel['descricao'] ?></p>

    <!-- imagem do hotel -->
    <img src="<?php echo base_url('assets/imagens/') . $hotel['imagem'] ?>">
</div>


