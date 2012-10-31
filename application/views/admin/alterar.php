<ul class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
  <li><a href="<?php echo base_url(); ?>admin/gerenciar">Gerenciar</a> <span class="divider">/</span></li>
  <li class="active">Alterar palavra</li>
</ul>

<?php
foreach ($user as $row) {
?>
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/gravar_alteracao">
  <input type="hidden" name="id" value="<?php echo $row->id;?>">
  <div class="control-group">
    <label class="control-label" for="ingles">Inglês</label>
    <div class="controls">
      <input type="text" name="ingles" id="ingles" value="<?php echo $row->ingles;?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="portugues">Português</label>
    <div class="controls">
      <input type="text" name="portugues" id="portugues" value="<?php echo $row->portugues;?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword"></label>
    <div class="controls">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
  </div>
</form>
<?php
}
?>
