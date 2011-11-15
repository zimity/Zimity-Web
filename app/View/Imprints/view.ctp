        <div class="page-header">
          <h1>Page name <small>Supporting text or tagline</small></h1>
        </div>
        <div class="row">
          <div class="span10">
            <h2>Main content</h2>

<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
<style type="text/css"> 

  #map_canvas { height: 480px;width: 640px }
</style>
        
        
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
    
    var contentString = '<div id="content">'+
    '<div id="siteNotice"></div>'+
    '<h1 id="firstHeading" class="firstHeading"><strong><?php echo ucfirst($imprint['User']['firstname']) . ' ' . ucfirst(substr($imprint['User']['lastname'], 0, 1)) . '.' ?></strong></h1>'+
    '<div id="bodyContent">'+
    '<p><?php echo $imprint['Imprint']['note']; ?></p>' +
    '</div>'+
    '</div>';
    
    var infowindow = new google.maps.InfoWindow({
    content: contentString,
    position: myLatlng
    });
    
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

            <table>
            <tr>
                <td>id</td>
                <td>firstname</td>
                <td>imp_type</td>
                <td>caption</td>
                <td>slug</td>
                <td>latitude</td>
                <td>longitude</td>
                <td>altitude</td>
                <td>bearing</td>
                <td>speed</td>
                <td>sharing</td>
                <td>accuracy</td>
                <td>syncd</td>
                <td>deleted</td>
                <td>created</td>
                <td>modified</td>
            </tr>
            
            <tr>
                <td><?php echo $this->Html->link($imprint['Imprint']['slug'], array('controller' => 'imprints', 'action' => 'view', $imprint['Imprint']['slug'])); ?>
                <td><?php echo $imprint['User']['firstname']; ?></td>
                <td><?php echo $imprint['Imprint']['imp_type']; ?></td>
                <td><?php echo $imprint['Imprint']['note']; ?></td>
                <td><?php echo $imprint['Imprint']['slug']; ?></td>
                <td><?php echo $imprint['Imprint']['latitude']; ?></td>
                <td><?php echo $imprint['Imprint']['longitude']; ?></td>
                <td><?php echo $imprint['Imprint']['altitude']; ?></td>
                <td><?php echo $imprint['Imprint']['bearing']; ?></td>
                <td><?php echo $imprint['Imprint']['speed']; ?></td>
                <td><?php echo $imprint['Imprint']['sharing']; ?></td>
                <td><?php echo $imprint['Imprint']['accuracy']; ?></td>
                <td><?php echo $imprint['Imprint']['syncd']; ?></td>
                <td><?php echo $imprint['Imprint']['deleted']; ?></td>
                <td><?php echo $imprint['Imprint']['created']; ?></td>
                <td><?php echo $imprint['Imprint']['modified']; ?></td>
            </tr>
            
        </table>

        <?php if ($imprint['Imprint']['imp_type'] == '2'):  ?>
            <a class="lightbox" rel="group1" href="http://s3.zimity.me/<?php echo $imprint['Imprint']['slug'] ?>.jpg"><img alt="example3" src="http://s3.zimity.me/<?php echo $imprint['Imprint']['slug']; ?>_m.jpg" /></a>
        <?php endif; ?>

    <div id="map_canvas"></div>

              </div>
          <div class="span4">
            <h3>Secondary content</h3>
          </div>
        </div>