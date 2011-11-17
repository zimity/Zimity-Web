<ul class="breadcrumb">
  <li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'display', 'home')); ?> <span class="divider">/</span></li>
  <li><?php echo $this->Html->link('Imprints', array('controller' => 'imprints', 'action' => 'index')); ?> <span class="divider">/</span></li>
  <li><?php echo ucfirst($user['User']['firstname']) . ' ' . ucfirst(substr($user['User']['lastname'], 0, 1)) . '.' ?></li>
</ul>

            <style type="text/css"> 
                  #map_canvas { height: 240px;width: 320px }
            </style>

        <div class="page-header">
          <h1><?php echo $imprint['Imprint']['note']; ?></h1>
        </div>
        <div class="row">
          <div class="span10">
          <?php if ($imprint['Imprint']['imp_type'] == '2'):  ?>
            <a class="lightbox" rel="group1" href="http://s3.zimity.me/<?php echo $imprint['Imprint']['slug'] ?>.jpg"><img alt="example3" src="http://s3.zimity.me/<?php echo $imprint['Imprint']['slug']; ?>_m.jpg" /></a>
          <?php endif; ?>

      <form action="" class="form-stacked">
          <div class="clearfix">
            <label for="comment">Comment</label>
            <div class="input">
              <textarea class="xxlarge" id="comment" name="comment" rows="3"></textarea>
            </div>
          <div class="actions">
            <input type="submit" class="btn primary" value="Post Comment">&nbsp;<button type="reset" class="btn">Cancel</button>
          </div>
          </div>
      </form>

      <table class="zebra-striped">
        <tbody>
          <tr>
            <td>PIC</td>
            <td>Username</td>
            <td>This is my comment about this imprint!</td>
          </tr>
          <tr>
            <td>PIC</td>
            <td>Username</td>
            <td>This is my comment about this imprint!</td>
          </tr>
          <tr>
            <td>PIC</td>
            <td>Username</td>
            <td>This is my comment about this imprint!</td>
          </tr>
          <tr>
            <td>PIC</td>
            <td>Username</td>
            <td>This is my comment about this imprint!</td>
          </tr>
          <tr>
            <td>PIC</td>
            <td>Username</td>
            <td>This is my comment about this imprint!</td>
          </tr>
          <tr>
            <td>PIC</td>
            <td>Username</td>
            <td>This is my comment about this imprint!</td>
          </tr>
        </tbody>
      </table>

          </div>
          <div class="span4">
            <h3>Profile</h3>
            <dl>
               <dt>Name</dt>
               <dd><?php echo $this->Html->link($imprint['User']['firstname'], array('controller' => 'imprints', 'action' => 'view', $imprint['Imprint']['slug'])); ?></dd>
               <dt>Location</dt>
               <dd>Ottawa, ON</dd>
               <dt>Contact</dt>
               <dd>blah@blah.com</dd>
             </dl>

            <div id="map_canvas"></div>
            <dl>
               <dt>Latitude</dt>
               <dd><?php echo $imprint['Imprint']['latitude']; ?></dd>
               <dt>Longitude</dt>
               <dd><?php echo $imprint['Imprint']['longitude']; ?></dd>
               <dt>Altitude</dt>
               <dd><?php echo $imprint['Imprint']['altitude']; ?></td></dd>
            </dl>
             </dl>
          </div>
        </div>


<script type="text/javascript"> 
  function initialize() {
    var myLatlng = new google.maps.LatLng(<?php echo $imprint['Imprint']['latitude']; ?>, <?php echo $imprint['Imprint']['longitude']; ?>);
    var myOptions = {
      zoom: 16,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      scaleControl: false,
      navigationControl: false,
      streetViewControl: false
    }
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    
    var contentString = '<div id="">'+
    '<div id="siteNotice"></div>'+
    '<h1 id="firstHeading" class="firstHeading"><strong><?php echo ucfirst($imprint['User']['firstname']) . ' ' . ucfirst(substr($imprint['User']['lastname'], 0, 1)) . '.' ?></strong></h1>'+
    '<div id="bodyContent">'+
    '<p><?php echo $imprint['Imprint']['note']; ?></p></div></div>';
    
    <!-- var infowindow = new google.maps.InfoWindow({ -->
    <!-- content: contentString, -->
    <!-- position: myLatlng -->
    <!-- }); -->
    
    var marker = new google.maps.Marker({
    position: myLatlng,
    map: map
    });

    infowindow.open(map, marker);
  }
  
  function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);

  }
  
  window.onload = loadScript;
</script>