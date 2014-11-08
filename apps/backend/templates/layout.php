
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>SensGroup - Interfaz de administrador</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
  <body>
      <!-- BLUE BAR TOP -->

      <div class="top-blue">
        <?php if ($sf_user->isAuthenticated()): ?>
          <div class='logout pull-right'>
            <?php echo link_to('Logout', 'sf_guard_signout') ?>
          </div>
          <?php endif ?>
      </div>

      <!-- NAVBAR -->

      <div class="pos-fixed">
        <div class="nav-bar">
          <p id='admin-title' class='pull-right'> Administración </p>
          <a href="index.php"><img id="logo_sens" src="/img/logosens1.png"></a>
          
        </div>
      </div>
    <div id="container">
 
      <div id="content">
        <?php echo $sf_content ?>
      </div>
    </div>
  </body>
</html>