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

  <title>Zimity - <?php echo $title_for_layout?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

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
      
      #map_canvas { height: 240px;width: 320px }

      .content .span10 {
        margin-left: 0;
        padding-left: 19px;
        border-right: 1px solid #eee;
      }
    </style>

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <?php echo $this->Html->script('libs/modernizr-2.0.6.min.js'); ?>

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <?php echo $this->Html->script('/js/fancybox/jquery.mousewheel-3.0.4.pack.js'); ?>
  <?php echo $this->Html->script('/js/fancybox/jquery.fancybox-1.3.4.pack.js'); ?>

  <?php echo $this->Html->script('/js/bootstrap/bootstrap-modal.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-alerts.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-dropdown.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-scrollspy.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-tabs.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-buttons.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-twipsy.js'); ?>
  <?php echo $this->Html->script('/js/bootstrap/bootstrap-popover.js'); ?>


  <link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

  <?php echo $scripts_for_layout ?>
</head>

<body>




    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="/">zimity</a>
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="http://blog.zimity.me/">Blog</a></li>
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
      
      <br />

      <footer>
            <?php echo $this->Html->link('About', '/about'); ?> &middot;
            <?php echo $this->Html->link('Contact Us', '/contact'); ?> &middot;
            <?php echo $this->Html->link('Blog', 'http://blog.zimity.me/'); ?> &middot;
            <?php echo $this->Html->link('Support', 'http://support.zimity.me/'); ?> &middot;
            <?php echo $this->Html->link('Developers', '/dev'); ?> &middot;
            <?php echo $this->Html->link('Jobs', '/jobs'); ?> &middot;
            <?php echo $this->Html->link('Terms', '/terms'); ?> &middot;
            <?php echo $this->Html->link('Privacy', '/privacy'); ?> &middot;
        &copy; 2011 Zimity
      </footer>

    </div> <!-- /container -->

  <!-- JavaScript at the bottom for fast page loading -->
  
  

  <script type="text/javascript">
    $(document).ready(function() {
       $("a[rel=twipsy]").twipsy({'placement': 'below'});
       $("a[rel=popover]").popover({offset: 10});


        $("a.lightbox").fancybox({
                'transitionIn'        : 'elastic',
                'transitionOut'       : 'elastic',
                'centerOnScroll'      : 'true',
                'hideOnOverlayClick'  : 'true',
                'hideOnContentClick'  : 'true',
                'margin'              : 75,
                'titlePosition'   : 'over',
                'overlayColor'    : '#000',
                'overlayOpacity'  : 0.9
              });
        });
  </script>

  <!-- scripts concatenated and minified via ant build script-->
  <?php echo $this->Html->script('plugins.js'); ?>
  <?php echo $this->Html->script('script.js'); ?>
  <!-- end scripts-->

  <script>
    window._gaq = [['_setAccount','UA-17761849-1'],['_trackPageview'],['_trackPageLoadTime']];
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