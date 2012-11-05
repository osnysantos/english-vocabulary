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
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gerenciar <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url(); ?>admin/palavras"><b class="icon-list"></b> Palavras</a></li>
              <li><a href="<?php echo base_url(); ?>admin/cadastrar_palavra"><b class="icon-plus-sign"></b> Cadastrar palavra</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo base_url(); ?>admin/grupos"><b class="icon-list"></b> Grupos</a></li>
              <li><a href="<?php echo base_url(); ?>admin/cadastrar_grupo"><b class="icon-plus-sign"></b> Cadastrar grupo</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo base_url(); ?>admin/niveis"><b class="icon-list"></b> Níveis</a></li>
              <li><a href="<?php echo base_url(); ?>admin/cadastrar_nivel"><b class="icon-plus-sign"></b> Cadastrar nível</a></li>
            </ul>
          </li>
        </ul>
        <?php if($this->uri->rsegment(2) == "index"){ ?>
        <ul class="nav pull-right">
          <li>
            <a href="#" class="filtros"><b class="icon-search"></b> <span>Filtros</span></a>
          </li>
          <li>
            <a href="#" class="inline"><b class="icon-cog"></b> <span>Editar inline</span></a>
          </li>
        </ul>
        <?php } ?>
      </div>
    </div>

    <div id="boxfiltro" class="filtro" style="display:none;">
      <form class="form-search">
        <fieldset>
          <input type="text" placeholder="Palavra" class="input-medium">
          <select name="grupo" id="grupo" class="input-large">
            <option value="">Todos os grupos</option>
            <?php foreach ($grupo as $grupo):?>
              <option value="<?= $grupo->id; ?>"><?= $grupo->nome; ?></option>
            <?php endforeach;?>
          </select>
          <select name="nivel" id="nivel" class="input-medium">
            <option value="">Todos os níveis</option>
            <?php foreach ($nivel as $nivel):?>
              <option value="<?= $grupo->id; ?>"><?= $nivel->nome; ?></option>
            <?php endforeach;?>
          </select>
          <select name="status" id="status" class="input-small">
            <option value="">Status</option>
            <option value="1">Ativo</option>
            <option value="0">Inativo</option>
          </select>
          <button type="submit" class="btn">Filtrar</button>
        </fieldset>
      </form>
    </div>
