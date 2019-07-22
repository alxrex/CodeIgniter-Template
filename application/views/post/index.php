<!-- div col -->
<div class="col-md-12 table-responsive-lg">
<?php

if ($query->num_rows()>0) {
    ?>

<table class="table table-hover table-striped table-sm">
<thead class="thead-dark">
<tr>
  <th scope="col">#</th>
  <th scope="col">Titulo</th>
  <th scope="col">Fecha</th>
  <th scope="col">Contenido</th>
  <th scope="col">Acciones</th>
</tr>
</thead>
<tbody>
<?php 
foreach($query->result() as $row )
{
?>
<tr>
  <th scope="row"><?=$row->id?></th>
  <td><?=$row->titulo?></td>
  <td><?=$row->fecha_publicacion?></td>
  <td><?=$row->contenido?></td>
  <td>
    <a href="<?=site_url('posts/ver/'.$row->id)?>">Ver</a>
    <a href="/<?=$row->id?>">Editar</a>
    <a href="">Eliminar</a>
  </td>
</tr>
<?php
}
?>
</tbody>
</table>


<?php
} 
else 
// Sin resultados
{
?>

<div class="alert alert-warning" role="alert">
  No se encontraron resultados
</div>

<?php
}
?>
</div>
<!-- /div col -->