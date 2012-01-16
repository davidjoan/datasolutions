<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <meta name="google-site-verification" content="GSYd7Ekx2Vhaqnz0oBiFLsepG9jIHMLrH2xBEHR4CAw" />
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
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-25417446-1']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script> 
  <script type="text/javascript">
  window.___gcfg = {lang: 'es'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>  
  </head>
  <body>
  <a name="top"></a>
  <!-- facebook -->
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=138426386270029";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <!-- header -->
  <header>
    <?php include_partial('General/header'); ?>
  </header>
  <!-- #gallery -->
  <section id="gallery">
    <?php include_component('General', 'galery') ?>
  </section>

  <div class="main-box">
    <div class="container">
      <div class="inside" id="inside">
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