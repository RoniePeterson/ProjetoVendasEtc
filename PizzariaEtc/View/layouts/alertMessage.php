<section id="alert-message">
  <?php if (isset($_GET["msg"])) { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <?= $_GET["msg"]; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php } ?>
</section>
