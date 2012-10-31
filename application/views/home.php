<?php
foreach ($user as $row) {
?>
<div class="flip" title="<?php echo $row->data; ?>">
	<div class="manage">
		<div class="edit"><?php echo anchor('admin/alterar/'.$row->id,'<span>Alterar</span>',array('class' => 'table-edit-link')); ?></div>
    <div class="delete"><?php echo anchor('admin/excluir/'.$row->id,'<span>Excluir</span>',array('class' => 'table-delete-link')); ?></div>
  </div>
	<div class="card">
		<div class="face front">
			<p class="en"><?php echo $row->ingles; ?></p>
		</div>
		<div class="face back">
			<p class="pt"><?php echo $row->portugues; ?></p>
		</div>
	</div>
</div>
<?php
}
?>
