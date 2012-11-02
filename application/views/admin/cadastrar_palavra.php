<ul class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
  <li><a href="<?php echo base_url(); ?>admin/gerenciar">Gerenciar</a> <span class="divider">/</span></li>
  <li class="active">Cadastrar palavra</li>
</ul>

<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/gravar_palavra">
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
    <label class="control-label" for="grupo">Grupo</label>
    <div class="controls">
      <select name="grupo" id="grupo">
        <?php foreach ($grupo as $grupo):?>
          <option value="<?= $grupo->id; ?>"><?= $grupo->nome; ?></option>
        <?php endforeach;?>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="nivel">Nível</label>
    <div class="controls">
      <select name="nivel" id="nivel">
        <?php foreach ($nivel as $nivel):?>
          <option value="<?= $nivel->id; ?>"><?= $nivel->nome; ?></option>
        <?php endforeach;?>
      </select>
    </div>
  </div>
  <div class="form-actions">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
