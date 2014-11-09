<div class='row well'>
<div class='col-md-4'></div>
<div class='col-md-4'>
  <?php if ( !isset($results) ): ?>
  <form method="post" enctype="multipart/form-data">
    <?php echo $form['_csrf_token']; ?>              
    <div class='text-center'>
      <h2>Importar automóviles</h2>
      <br />
      <?php if (isset($errors)):?>
      <?php foreach ($errors as $error):?>
          <p class='alert alert-danger'><?php echo $error ?></p>
      <?php endforeach;?>
      <?php endif;?>
      <?php echo $form['csv']->renderLabel( 'Seleccione un archivo CSV', array('class' => 'control-label') ); ?>
      <div class='csv-container'>
        <?php echo $form['csv']; ?>
      </div>
      <br />
      <?php echo $form['csv']->renderError(); ?>
    </div>
    <div>
        <input type='submit' class="btn btn-success csv-submit" href="#" value='Importar'/> 
    </div>
  </form>
  <?php else: ?>
  <div class='well'>
    <h2>Resultado de la importación</h2>
    <br>
    
    <p class='alert alert-success'> La importación fue exitosa! </p>

    <?php if (isset($results['errors'])):?>
    <p class='alert alert-danger'>
      Errores:
    </p>
    <br>
    <table class='table table-striped'>
      <tr>
        <th>#</th>
        <th>Descripción</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach( $results['errors'] as $error ): ?>
      <tr>
        <td class="center"><?php echo $i; ?></td>
        <td><?php echo html_entity_decode($error); ?></td>
      </tr>
      <?php $i++; ?>
      <?php endforeach; ?>
    </table>
    <?php endif ?>
    </div>
  <?php endif ?>
  </div>
</div>
<div class='col-md-4'></div>
</div>