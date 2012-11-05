<?php
if($this->uri->rsegment(2) == "alterar_palavra"){
?>
<script>
$(function($) {
  $('div.btn-group[data-toggle-name=*]').each(function(){
    var group   = $(this);
    var form    = group.parents('form').eq(0);
    var name    = group.attr('data-toggle-name');
    var hidden  = $('input[name="' + name + '"]', form);
    $('button', group).each(function(){
      var button = $(this);
      button.live('click', function(){
          hidden.val($(this).val());
      });
      if(button.val() == hidden.val()) {
        button.addClass('active');
      }
    });
  });
});
</script>
<?php
}
?>
<ul class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>">Home</a> <span class="divider">/</span></li>
  <li><a href="<?php echo base_url(); ?>admin/palavras">Gerenciar</a> <span class="divider">/</span></li>
  <?php
  if($this->uri->rsegment(2) == "alterar_palavra"){
    ?>
    <li class="active">Alterar palavra</li>
    <?php
  } else {
    ?>
    <li class="active">Cadastrar palavra</li>
    <?php
  }
  ?>
</ul>

<?php
if($this->uri->rsegment(2) == "alterar_palavra"){
  ?>
  <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/update_palavra">
    <input type="hidden" name="id" value="<?php echo $user[0]->id;?>">
  <?php
} else {
  ?>
  <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/gravar_palavra">
  <?php
}
?>
  <div class="control-group">
    <label class="control-label" for="ingles">Inglês</label>
    <div class="controls">
      <input type="text" name="ingles" id="ingles" value="<?php if(!empty($user)){echo $user[0]->ingles;} ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="portugues">Português</label>
    <div class="controls">
      <input type="text" name="portugues" id="portugues" value="<?php if(!empty($user)){echo $user[0]->portugues;} ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="grupo">Grupo</label>
    <div class="controls">
      <select name="grupo" id="grupo">
        <?php foreach ($grupo as $grupo):?>
          <?php
          if(!empty($user) && $grupo->id == $user[0]->grupo){
          ?>
          <option value="<?= $grupo->id; ?>" selected="selected"><?= $grupo->nome; ?></option>
          <?php
            } else {
          ?>
          <option value="<?= $grupo->id; ?>"><?= $grupo->nome; ?></option>
          <?php
          }
          ?>
        <?php endforeach;?>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="nivel">Nível</label>
    <div class="controls">
      <select name="nivel" id="nivel">
        <?php foreach ($nivel as $nivel):?>
          <?php
          if(!empty($user) && $nivel->id == $user[0]->nivel){
          ?>
          <option value="<?= $nivel->id; ?>" selected="selected"><?= $nivel->nome; ?></option>
          <?php
            } else {
          ?>
          <option value="<?= $nivel->id; ?>"><?= $nivel->nome; ?></option>
          <?php
          }
          ?>
        <?php endforeach;?>
      </select>
    </div>
  </div>
  <?php
  if(!empty($user)){
  ?>
  <div class="control-group">
    <label class="control-label" for="status">Status</label>
    <div class="controls">
      <div class="btn-group" data-toggle="buttons-radio" data-toggle-name="status">
        <button type="button" value="1" class="btn">On</button>
        <button type="button" value="0" class="btn">Off</button>
      </div>
      <input type="hidden" name="status" value="<?php echo $user[0]->status; ?>" />
    </div>
  </div>
  <?php
  }
  ?>
  <div class="form-actions">
    <?php
    if($this->uri->rsegment(2) == "alterar_palavra"){
      ?>
      <button type="submit" class="btn btn-primary">Alterar</button>
      <?php
    } else {
      ?>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <?php
    }
    ?>
  </div>
</form>
