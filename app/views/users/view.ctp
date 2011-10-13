<p class="title"><?php echo ucfirst($user['User']['firstname']) . ' ' . ucfirst(substr($user['User']['lastname'], 0, 1)) . '.' ?></p>

<br />
<p class="title">Photos</p>
<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 2) {
			echo '<a id="example3" href="http://s3.zimity.me/' . $imprint['slug'] . '.jpg"><img alt="example3" src="http://s3.zimity.me/' . $imprint['slug'] . '_s.jpg" /></a>';
		}
	}
?>

<br />
<p class="title">Videos</p>

<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 4) {
			echo $imprint['note'] . '<br />';
		}
	}
?>

<br />
<p class="title">Notes</p>

<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 1) {
			echo $this->Html->link($imprint['note'], array('controller' => 'imprints', 'action' => 'view', $imprint['slug'])) . '<br />';
		}
	}
?>

<br />
<p class="title">Audio</p>

<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 3) {
			echo $this->Html->link($imprint['note'], array('controller' => 'imprints', 'action' => 'view', $imprint['slug'])) . '<br />';
		}
	}
?>

<br />
<p class="title">Events</p>

<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 5) {
			echo $imprint['note'] . '<br />';
		}
	}
?>

<br />
<p class="title">Reminders</p>

<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 6) {
			echo $imprint['note'] . '<br />';
		}
	}
?>

<br />
<p class="title">Deals</p>

<?php
	foreach ($user['Imprint'] as $imprint) {
		if ($imprint['imp_type'] == 7) {
			echo $imprint['note'] . '<br />';
		}
	}
?>

</table>

