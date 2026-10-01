<div class="container">
  <h2><?= $experiment->title ?></h2>

  <p><?= $experiment->problem ?></p>

  <form method="post" action="<?= base_url('lab/submit') ?>">
    
    <textarea name="code" rows="15" style="width:100%;border:1px solid #ccc;">
// Write your code here
    </textarea>

    <input type="hidden" name="experiment_id" value="<?= $experiment->id ?>">

    <br><br>

    <button type="submit" class="btn">Submit</button>
  </form>
</div>