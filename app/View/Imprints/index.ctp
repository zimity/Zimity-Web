         <div class="page-header">
          <h1>Imprints! <small>Supporting text or tagline</small></h1>
        </div>
        <div class="row">
          <div class="span10">

<ul class="media-grid">

<?php
    foreach ($imprints as $imprint) {
        if ($imprint['Imprint']['imp_type'] == 2) {
            echo '<li><a class="lightbox" rel="popover" title="' . $imprint['Imprint']['note'] . '" href="http://s3.zimity.me/' . $imprint['Imprint']['slug'] . '.jpg"><img alt="' . $imprint['Imprint']['note'] . '" src="http://s3.zimity.me/' . $imprint['Imprint']['slug'] . '_s.jpg" /></a></li>';
        } else {
            echo '<li>' . $this->Html->link($imprint['Imprint']['note'], '', array('rel' => 'popover')) . '</li>';
        }
    }
?>

</ul>

          </div>
          <div class="span4">
            <h3>Secondary content</h3>
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