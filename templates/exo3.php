<h2>Exo 3</h2>

<?php if (isset($_SESSION['final']) && $_SESSION['final']): ?>
  <p class="alert alert-success">Yeah !</p>
<?php else: ?>
  <p class="alert alert-danger">Pas bon...</p>
<?php endif; ?>

<div class="row">
  <form action="index.php" method="post">
    <div class="form-group">
      <label for="">Nom d'utilisateur</label>
      <input type="text" name="username" value="" class="form-control" placeholder="Login" autocomplete="off">
    </div>

    <div class="form-group">
      <label for="">Mot de passe</label>
      <input type="password" name="password" value="" class="form-control" placeholder="Password" autocomplete="off">
    </div>

    <button type="submit" name="button">S'identifier</button>
  </form>
</div>
