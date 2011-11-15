        <div class="page-header">
          <h1>Users  <small>Supporting text or tagline</small></h1>
        </div>
        <div class="row">
          <div class="span10">
            <h2>Main content</h2>

	<p class="title">Users</p>

        <table>
            <tr>
                <td>id</td>
                <td>type</td>
                <td>firstname</td>
                <td>lastname</td>
                <td>email</td>
                <td>activated</td>
                <td>activation_hash</td>
                <td>facebook</td>
                <td>twitter</td>
                <td>deleted</td>
                <td>created</td>
                <td>modified</td>
            </tr>        
            
            <?php foreach ($users as $user): ?>

            <tr>
                <td><?php echo $this->Html->link($user['User']['id'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?></td>
                <td><?php echo $user['User']['type']; ?></td>
                <td><?php echo $user['User']['firstname']; ?></td>
                <td><?php echo $user['User']['lastname']; ?></td>
                <td><?php echo $user['User']['email']; ?></td>
                <td><?php echo $user['User']['activated']; ?></td>
                <td><?php echo $user['User']['activation_hash']; ?></td>
                <td><?php echo $user['User']['facebook']; ?></td>
                <td><?php echo $user['User']['twitter']; ?></td>
                <td><?php echo $user['User']['deleted']; ?></td>
                <td><?php echo $user['User']['created']; ?></td>
                <td><?php echo $user['User']['modified']; ?></td>	
            </tr>
        
            <?php endforeach; ?>

        <table>

          </div>
          <div class="span4">
            <h3>Secondary content</h3>
          </div>
        </div>