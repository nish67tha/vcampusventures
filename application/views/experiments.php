<div class="container">
  <h2>Experiments</h2>

  <?php foreach($experiments as $exp): ?>
    <div class="lab-card">
      <h3><?= $exp->title ?></h3>
      <p><?= $exp->problem ?></p>

      <a href="<?= base_url('lab/run/'.$exp->id) ?>" class="btn">Start Lab</a>
    </div>
  <?php endforeach; ?>
</div>