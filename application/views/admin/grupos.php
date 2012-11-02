<table class="table table-hover">
  <thead>
    <tr>
      <th width="5%">Id</th>
      <th width="20%">Nome</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($user as $row)
    {
      ?>
      <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->nome; ?></td>
        <td>
          <a href="<?php echo base_url(); ?>admin/alterar/<?php echo $row->id; ?>" class="btn btn-mini"><b class="icon-pencil"></b> <span>Alterar</span></a>
          <a href="<?php echo base_url(); ?>admin/excluir/<?php echo $row->id; ?>" class="btn btn-mini"><b class="icon-remove"></b> <span>Excluir</span></a>
        </td>
      </tr>
      <?php
    }
    ?>
  </tbody>
</table>
</div>
</div>
