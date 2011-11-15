<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <?php echo $this->Html->charset(); ?>

  <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php echo $title_for_layout?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="<?php echo $this->webroot;?>favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="<?php echo $this->webroot;?>apple-touch-icon.ico" type="image/x-icon" />

     <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

  <?php echo $this->Html->css('bootstrap.min'); ?>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.6.min.js"></script>

  <?php echo $scripts_for_layout ?>
</head>

<body>




    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="http://zimity.me">zimity</a>
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
                    <li class="dropdown" data-dropdown="dropdown">
          <a href="#" class="dropdown-toggle">Dropdown</a>

          <ul class="dropdown-menu">
            <li><a href="#">Secondary link</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Another link</a></li>
          </ul>
        </li>

          </ul>
          <form action="" class="pull-right">
            <input class="input-small" type="text" placeholder="Username">
            <input class="input-small" type="password" placeholder="Password">
            <button class="btn primary" type="submit">Sign in</button>
            <a href="#" class="btn success">Sign up</a>
          </form>
        </div>
      </div>
    </div>

    <div class="container">
      <?php echo $this->Session->flash(); ?>
      <div class="content">

        <?php echo $content_for_layout ?>

      </div>

      <footer>
        <p>&copy; Company 2011</p>
      </footer>

    </div> <!-- /container -->

  <!-- JavaScript at the bottom for fast page loading -->
  
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>

  <?php echo $this->Html->script('/js/fancybox/jquery.mousewheel-3.0.4.pack.js'); ?>
  <?php echo $this->Html->script('/js/fancybox/jquery.fancybox-1.3.4.pack.js'); ?>

  <?php echo $this->Html->script('/js/bootstrap/bootstrap-modal.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-alerts.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-twipsy.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-popover.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-dropdown.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-scrollspy.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-tabs.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-buttons.js'); ?>

  <link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

  <script type="text/javascript">
    $(document).ready(function() {

        $("a.lightbox").fancybox({
                'transitionIn'        : 'elastic',
                'transitionOut'       : 'elastic',
                'centerOnScroll'      : 'true',
                'hideOnOverlayClick'  : 'true',
                'hideOnContentClick'  : 'true',
                'margin'              : 75,
                'titlePosition'   : 'over',
                'overlayColor'    : '#000',
                'overlayOpacity'  : 0.9,
                'titleFormat'   : function(title, currentArray, currentIndex, currentOpts) {
          return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
              }
      });
        });
  </script>

  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

  
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>