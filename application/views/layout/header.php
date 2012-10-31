<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>Vocabulary Booster v1</title>
    <link href="<?php echo base_url(); ?>assets/css/global.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/global.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="brand"><a href="<?php echo base_url(); ?>">Enghish Vocabulary Booster</a></div>
        <ul class="nav">
          <li <?php if($this->uri->rsegment(2) == "index"){ echo "class='active'"; } ?>><a href="<?php echo base_url(); ?>">Home</a></li>
          <li <?php if($this->uri->rsegment(2) == "gerenciar" || $this->uri->rsegment(2) == "alterar"){ echo "class='active'"; } ?>><a href="<?php echo base_url(); ?>admin/gerenciar">Gerenciar</a></li>
          <li <?php if($this->uri->rsegment(2) == "cadastrar"){ echo "class='active'"; } ?>><a href="<?php echo base_url(); ?>admin/cadastrar">Cadastrar palavra</a></li>
        </ul>
        <?php if($this->uri->rsegment(2) == "index"){ ?>
        <ul class="nav pull-right">
          <li>
            <a href="#" class="inline"><span>Editar inline</span> <b class="icon-cog"></b></a>
          </li>
        </ul>
        <?php } ?>
      </div>
    </div>
