<div class="col-8">

<?php
if( $status == 1) {
  ?>
  <div class="alert alert-success" role="alert">
    <?=$message?>
  </div>
 <?php
}

?>


<?php if ( strlen(validation_errors())>0 ) {  ?>
<div class="alert alert-warning" role="alert">
    <?php echo validation_errors(); ?>
</div>
<?php } ?>


<?php echo form_open('post/create'); ?>
  <div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Titulo" value="<?php echo set_value('title'); ?>">
  </div>
  <!--<div class="form-group">
    <label for="categoria">Categoria</label>
    <select class="form-control" id="categoria" name="categoria">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>-->
  <div class="form-group">
    <label for="fecha_publicacion">Fecha</label>
    <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" placeholder="Fecha de Publicacion" >
  </div>
  <!--<div class="form-group">
    <label for="tags">Tags</label>
    <select multiple class="form-control" id="tags" name="tags">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option><
    </select>
  </div>-->
  <div class="form-group">
    <label for="contenido">Post</label>
    <textarea class="form-control" id="contenido" name="contenido" rows="3"></textarea>
  </div>

    <div class="form-group">
    <label>&nbsp;</label>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

</div>