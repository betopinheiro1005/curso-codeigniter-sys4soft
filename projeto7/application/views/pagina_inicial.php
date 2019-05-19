<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
    <h3 class="text-center">Escolha o seu hotel</h3>
</div>

<div class="row">

    <div class="col-sm-6 col-12 text-center p-2">
        <a href="<?php echo site_url('geral/hotel/0') ?>">
            <img src="<?php echo base_url('assets/imagens/') . $hoteis[0] ?>">
        </a>
    </div>

    <div class="col-sm-6 col-12 text-center p-2">
        <a href="<?php echo site_url('geral/hotel/1') ?>">
            <img src="<?php echo base_url('assets/imagens/') . $hoteis[1] ?>">
        </a>
    </div>

    <div class="col-sm-6 col-12 text-center p-2">
        <a href="<?php echo site_url('geral/hotel/2') ?>">
            <img src="<?php echo base_url('assets/imagens/') . $hoteis[2] ?>">
        </a>
    </div>

    <div class="col-sm-6 col-12 text-center p-2">
        <a href="<?php echo site_url('geral/hotel/3') ?>">
            <img src="<?php echo base_url('assets/imagens/') . $hoteis[3] ?>">
        </a>
    </div>

</div>