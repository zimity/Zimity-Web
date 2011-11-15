        <div class="page-header">
          <h1><?php echo ucfirst($user['User']['firstname']) . ' ' . ucfirst(substr($user['User']['lastname'], 0, 1)) . '.' ?> <small>life beings at the end of your comfort (make this a quote column)</small></h1>
        </div>
        <div class="row">
          <div class="span10">

<h3>Photos</h3>
<ul class="media-grid">

<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 2) {
			echo '<li><a class="lightbox" rel="group1" href="http://s3.zimity.me/' . $imprint['slug'] . '.jpg"><img alt="' . $imprint['note'] . '" src="http://s3.zimity.me/' . $imprint['slug'] . '_s.jpg" /></a></li>';
		}
	}
?>

</ul>

<br />
<h3>Videos</h3>

<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 4) {
			echo $imprint['note'] . '<br />';
		}
	}
?>

<br />
<h3>Notes</h3>

<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 1) {
			echo $this->Html->link($imprint['note'], array('controller' => 'imprints', 'action' => 'view', $imprint['slug'])) . '<br />';
		}
	}
?>

<br />
<h3>Audio</h3>

<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 3) {
			echo $this->Html->link($imprint['note'], array('controller' => 'imprints', 'action' => 'view', $imprint['slug'])) . '<br />';
		}
	}
?>

<br />
<h3>Events</h3>

<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 5) {
			echo $imprint['note'] . '<br />';
		}
	}
?>

<br />
<h3>Reminders</h3>

<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 6) {
			echo $imprint['note'] . '<br />';
		}
	}
?>

<br />
<h3>Deals</h3>

<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 7) {
			echo $imprint['note'] . '<br />';
		}
	}
?>

</table>

          </div>
          <div class="span4">
            <h3>Profile</h3>
            <dl>
               <dt>Name</dt>
               <dd>Melvin Parinas</dd>
               <dt>Location</dt>
               <dd>Ottawa, ON</dd>
               <dd>Canada</dd>
               <dt>Interests</dt>
               <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
               <dt>Contact</dt>
               <dd>blah@blah.com</dd>
             </dl>
          </div>
        </div>