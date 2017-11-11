<?php if ($_SESSION['user']): ?>
  <p class="alert alert-success">Yeah !</p>
<?php else: ?>
  <p class="alert alert-danger">Pas bon...</p>
<?php endif; ?>
