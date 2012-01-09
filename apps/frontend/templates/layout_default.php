<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.gif" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  <!--[if lt IE 7]>
  	<link rel="stylesheet" href="/css/frontend/ie/ie6.css" type="text/css" media="all">
  <![endif]-->
  <!--[if lt IE 9]>
    <script type="text/javascript" src="/js/frontend/html5.js"></script>
    <script type="text/javascript" src="/js/frontend/IE9.js"></script>
  <![endif]-->    
  </head>
  <body>

  <header>
    <?php include_partial('General/header'); ?>
  </header>

  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
          <?php echo $sf_content ?>
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <?php include_partial('General/footer'); ?>
  </footer>
  
  <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>