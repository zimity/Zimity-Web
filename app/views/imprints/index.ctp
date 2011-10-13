<html>
    <head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="./js/jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        
        <script type="text/javascript">
	$(document).ready(function() {

		$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});
        });
        </script>
    </head>
    
    <body>

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
                    <a id="example3" href="http://s3.zimity.me/<?php echo $imprint['Imprint']['slug']; ?>.jpg"><img alt="example3" src="http://s3.zimity.me/<?php echo $imprint['Imprint']['slug']; ?>_s.jpg" /></a>
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

    </body>
</html>