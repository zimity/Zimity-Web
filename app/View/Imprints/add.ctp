  <div class="page-header">
    <h1>Page name <small>Supporting text or tagline</small></h1>
  </div>

  <div class="row">
    <div class="span10">
      <h2>Main content</h2>
      <?php
          echo $this->Form->create('Imprint');
          echo $this->Form->input('caption');
          echo $this->Form->end('Save');
      ?>
    </div>

    <div class="span4">
      <h3>Secondary content</h3>
    </div>
  </div>