<?php use_helper('I18N') ?>
<div class='row'>
  <div class='col-md-4'></div>
  <div class='col-md-4'>
    <form class='form-signin' role='form' action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
        <h2 class="form-signin-heading">Ingreso:</h2>
        <?php echo $form ?> <br>
        <input value='Ingresar' class="btn btn-lg btn-primary btn-block" type="submit">
    </form>
  </div>
  <div class='col-md-4'></div>
</div>