        <div class="page-header">
          <h1>Users  <small>Supporting text or tagline</small></h1>
        </div>
	
        <div class="row">
          <div class="span10">

	  <ul class="media-grid">
            
            <?php
	       foreach ($users as $user) {
                  echo $this->Html->link($user['User']['firstname'], array('controller' => 'users', 'action' => 'view', $user['User']['id']));
               }
            ?>

	  </ul>

          </div>
          <div class="span4">
            <h3>Secondary content</h3>
	    asdfasldkfjnldkf
          </div>
        </div>

<div class="pagination">
  <ul>
    <li class="prev disabled"><a href="#">&larr; Previous</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li class="next"><a href="#">Next &rarr;</a></li>
  </ul>
</div>