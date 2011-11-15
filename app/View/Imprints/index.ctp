         <div class="page-header">
          <h1>Imprints! <small>Supporting text or tagline</small></h1>
        </div>
        <div class="row">
          <div class="span10">
            <h2>Main content</h2>

        <table>
            <tr>
                <td>pic</td>
                <td>id</td>
                <td>username</td>
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
            
            <?php foreach ($imprints as $imprint): ?>

            <tr>
                <td>
                    <?php if ($imprint['Imprint']['imp_type'] == '2'):  ?>
                    <a class="lightbox" rel="group1" href="http://s3.zimity.me/<?php echo $imprint['Imprint']['slug']; ?>.jpg"><img alt="example3" src="http://s3.zimity.me/<?php echo $imprint['Imprint']['slug']; ?>_s.jpg" /></a>
                    <?php endif; ?>
                </td>
                <td><?php echo $this->Html->link($imprint['Imprint']['slug'], array('controller' => 'imprints', 'action' => 'view', $imprint['Imprint']['slug'])); ?>
                <td><?php echo $this->Html->link($imprint['User']['firstname'], array('controller' => 'users', 'action' => 'view', $imprint['User']['id'])); ?></td>
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
        
            <?php endforeach; ?>
            
            <td>id</td>
                <td>userid</td>
                <td>imp_type</td>
                <td>note</td>
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
        <table>

          </div>
          <div class="span4">
            <h3>Secondary content</h3>
          </div>
        </div>