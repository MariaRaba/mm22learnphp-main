<?php include 'partials/header.php'; ?>

<main class="container">
  <?php if($fname): ?>
    <h3>Hello <?=$fname?></h3>
  <?php endif; ?>
  <form method="POST" action="/form">
    <div class="mb-3">
      <label for="fname" class="form-label">First Name</label>
      <input name="fname" type="text" class="form-control" id="fname" placeholder="Enter you name...">
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-primary" value="Send biatch!">
    </div>
  </form>

</main>

<?php include 'partials/footer.php'; ?>