<table class="table table-hover">
  <thead>
    <tr>
      <th width="5%">Id</th>
      <th width="10%">Português</th>
      <th width="10%">Inglês</th>
      <th width="20%">Grupo</th>
      <th width="10%">Nível</th>
      <th width="5%">Status</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($user as $row)
    {
      ?>
      <tr<?php if($row->status=="0"){ echo ' class="disabled"'; } ?>>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->portugues; ?></td>
        <td><?php echo $row->ingles; ?></td>
        <td><?php echo $row->nome_grupo; ?></td>
        <td><?php echo $row->nome_nivel; ?></td>
        <td>
          <?php
            if($row->status=="0"){
              echo "<span class='off'>Off</span>";
            } else {
              echo "<span class='on'>On</span>";
            }
          ?></td>
        <td>
          <a href="<?php echo base_url(); ?>admin/alterar_palavra/<?php echo $row->id; ?>" class="btn btn-mini"><b class="icon-pencil"></b> <span>Alterar</span></a>
          <a href="<?php echo base_url(); ?>admin/excluir_palavra/<?php echo $row->id; ?>" class="btn btn-mini"><b class="icon-remove"></b> <span>Excluir</span></a>
        </td>
      </tr>
      <?php
    }
    ?>
  </tbody>
</table>
</div>
</div>
