  <ul class="breadcrumb">
    <li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'display', 'home')); ?><span class="divider">/</span></li>
    <li><?php echo $this->Html->link('Imprints', array('controller' => 'imprints', 'action' => 'index')); ?><span class="divider">/</span></li>
    <li><?php echo $this->Html->link($imprint['Imprint']['slug'], array('controller' => 'imprints', 'action' => 'view', $imprint['Imprint']['slug'])); ?></li>
  </ul>

  <div class="page-header">
    <h1><?php echo $imprint['Imprint']['title']; ?></h1>
  </div>

  <div class="row">
    <div class="span10">
      <div class="media-grid">
        <?php if ($imprint['Imprint']['imp_type'] == '2')
            echo '<li>' . $this->Html->link($this->Html->image('http://s3.zimity.me/' . $imprint['Imprint']['slug'] . '_m.jpg'), 'http://s3.zimity.me/' . $imprint['Imprint']['slug'] . '.jpg', array('escape' => false, 'class' => 'lightbox', 'title' => 'adsfasf')) . '</li>';
        ?>
      </div>

      <p><?php echo $imprint['Imprint']['note']; ?></p>
      
      <g:plusone size="small"></g:plusone>
      
      <a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a>
      
      <div class="fb-like" data-href="<?php echo 'http://zimity.me/' . $this->here; ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>

      <form action="" class="form-stacked">
        <div class="clearfix">
          <label for="comment">Comment</label>

          <div class="input">
            <textarea class="xxlarge" id="comment" name="comment" rows="3"></textarea>
          </div>

          <div class="actions">
            <input type="submit" class="btn primary" value=
            "Post Comment" />&nbsp;<button type="reset" class="btn">Cancel</button>
          </div>
        </div>
      </form>

      <table class="zebra-striped">
        <tbody>
	  <?php
	  foreach($imprint['Comment'] as $comments) {
	     echo '<tr><td>PIC</td><td>' . $comments['user_id'] . '</td>';
              echo '<td>' . $comments['comment'] . '</td></tr>';
	  }
          ?>
        </tbody>
      </table>
    </div>

    <div class="span4">
      <dl>
        <dt>Name</dt>
        <dd><?php echo $this->Html->link($imprint['User']['firstname'], array('controller' => 'users', 'action' => 'view', $imprint['User']['id'])); ?></dd>
      </dl>

      <div id="map_canvas"></div>

      <dl>
        <dt>Latitude</dt>
        <dd><?php echo $imprint['Imprint']['latitude']; ?></dd>

        <dt>Longitude</dt>
        <dd><?php echo $imprint['Imprint']['longitude']; ?></dd>

        <dt>Altitude</dt>
        <dd><?php echo $imprint['Imprint']['altitude']; ?></dd>
      </dl>
      
      <br />
      
      <script type="text/javascript"><!--
      google_ad_client = "ca-pub-1840414531786659";
      /* ZimityImprintAds */
      google_ad_slot = "0867945814";
      google_ad_width = 250;
      google_ad_height = 250;
      //-->
      </script>
      <script type="text/javascript"
      src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
      </script>

    </div>
  </div>
  <script type="text/javascript">
  //<![CDATA[

  function initialize() {
    var myLatlng = new google.maps.LatLng(<?php echo $imprint['Imprint']['latitude']; ?>, <?php echo $imprint['Imprint']['longitude']; ?>);
    var myOptions = {
      zoom: 16,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      scaleControl: false,
      navigationControl: true,
      streetViewControl: false
    }
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    
    var marker = new google.maps.Marker({
    position: myLatlng,
    map: map
    });
  }

  function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);

  }

  window.onload = loadScript;
  
  //]]>
  </script>

<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=166134936742177";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<pre>
  <?php echo print_r($imprint) ?>
</pre>