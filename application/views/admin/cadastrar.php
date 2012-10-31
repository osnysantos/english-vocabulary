<ul class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
  <li><a href="<?php echo base_url(); ?>admin/gerenciar">Gerenciar</a> <span class="divider">/</span></li>
  <li class="active">Cadastrar palavra</li>
</ul>

<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/gravar">
  <div class="control-group">
    <label class="control-label" for="ingles">Inglês</label>
    <div class="controls">
      <input type="text" name="ingles" id="ingles">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="portugues">Português</label>
    <div class="controls">
      <input type="text" name="portugues" id="portugues">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword"></label>
    <div class="controls">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </div>
</form>
