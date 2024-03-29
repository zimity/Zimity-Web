  <ul class="breadcrumb">
    <li><?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'display', 'home')); ?><span class="divider">/</span></li>
    <li><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index')); ?><span class="divider">/</span></li>
    <li><?php echo $this->Html->link(ucfirst($user['User']['firstname']) . ' ' . ucfirst(substr($user['User']['lastname'], 0, 1)) . '.', array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?></li>
  </ul>

  <div class="page-header">
    <h1>
    <?php echo ucfirst($user['User']['firstname']) . ' ' . ucfirst(substr($user['User']['lastname'], 0, 1)) . '.' ?>
    <small><?php echo $user['User']['quote']; ?></small></h1>
  </div>

  <div class="row">
    <div class="span10">
      <ul class="tabs">
        <li class="active"><a href="#photos">Photos</a></li>
        <li><a href="#videos">Videos</a></li>
        <li><a href="#notes">Notes</a></li>
        <li><a href="#audio">Audio</a></li>
        <li><a href="#events">Events</a></li>
        <li><a href="#reminders">Reminders</a></li>
        <li><a href="#deals">Deals</a></li>
      </ul>

      <div class="pill-content">
        <div class="active" id="photos">
          <h3>Photos</h3>

          <ul class="media-grid">
            <?php
                    foreach ($user['Imprint'] as $imprint) {
                            if ($imprint['imp_type'] == 2) {
                                    echo '<li><a rel="popover" title="' . $imprint['title'] . '" href="/i/' . $imprint['slug'] . '"><img alt="' . $imprint['title'] . '" src="http://s3.zimity.me/' . $imprint['slug'] . '_s.jpg" /></a></li>';
                            }
                    }
            ?>
          </ul>
        </div>

        <div id="videos">
          <h3>Videos</h3>
	  <?php
                  foreach ($user['Imprint'] as $imprint) {
                          if ($imprint['imp_type'] == 4) {
                                  echo $imprint['note'] . '<br />';
                          }
                  }
          ?>
        </div>

        <div id="notes">
          <h3>Notes</h3>
	  <?php
                  foreach ($user['Imprint'] as $imprint) {
                          if ($imprint['imp_type'] == 1) {
                                  echo $this->Html->link($imprint['note'], array('controller' => 'imprints', 'action' => 'view', $imprint['slug'])) . '<br />';
                          }
                  }
          ?>
        </div>

        <div id="audio">
          <h3>Audio</h3>
	  <?php
                  foreach ($user['Imprint'] as $imprint) {
                          if ($imprint['imp_type'] == 3) {
                                  echo $this->Html->link($imprint['note'], array('controller' => 'imprints', 'action' => 'view', $imprint['slug'])) . '<br />';
                          }
                  }
          ?>
        </div>

        <div id="events">
          <h3>Events</h3>
	  <?php
                  foreach ($user['Imprint'] as $imprint) {
                          if ($imprint['imp_type'] == 5) {
                                  echo $imprint['note'] . '<br />';
                          }
                  }
          ?>
        </div>

        <div id="reminders">
          <h3>Reminders</h3>
	  <?php
                  foreach ($user['Imprint'] as $imprint) {
                          if ($imprint['imp_type'] == 6) {
                                  echo $imprint['note'] . '<br />';
                          }
                  }
          ?>
        </div>

        <div id="deals">
          <h3>Deals</h3>
	  <?php
                  foreach ($user['Imprint'] as $imprint) {
                          if ($imprint['imp_type'] == 7) {
                                  echo $imprint['note'] . '<br />';
                          }
                  }
          ?>
        </div>
      </div>

      <form action="" class="form-stacked">
        <div class="clearfix">
          <label for="comment">Wall Post</label>

          <div class="input">
            <textarea class="xxlarge" id="comment" name="comment" rows="3"></textarea>
          </div>

          <div class="actions">
            <input type="submit" class="btn primary" value=
            "Post" />&nbsp;<button type="reset" class="btn">Clear</button>
          </div>
        </div>
      </form>

      <table class="zebra-striped">
        <tbody>
	  <?php
	  foreach($user['MessageReceived'] as $messages) {
	     echo '<tr><td>PIC</td><td>' . $messages['recipient_id'] . '</td>';
              echo '<td>' . $messages['comment'] . '</td></tr>';
	  }
          ?>
        </tbody>
      </table>
    </div>

    <div class="span4">
      <h3>Profile</h3>

      <dl>
        <dt>Name</dt>
        <dd><?php echo ucfirst($user['User']['firstname']) . ' ' . ucfirst(substr($user['User']['lastname'], 0, 1)) . '.' ?></dd>

        <dt>Location</dt>
        <dd><?php echo $user['User']['location']; ?></dd>

        <dt>About</dt>
        <dd><?php echo $user['User']['about']; ?></dd>
      </dl>
    </div>
  </div>
  <script type="text/javascript">
  //<![CDATA[
  $(function () {
    $('.tabs').tabs()
  })
  //]]>
  </script>
  
<pre>
  <?php echo print_r($user) ?>
</pre>