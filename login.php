<?php
include 'includes/header.php';
?>

<style>
html, body {
  height: 100%;
  margin: 0;
}

body {
  display: flex;
  flex-direction: column;

  background-image: url('images/bg4.jpeg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}

/* This pushes footer down */
.main-content {
  flex: 1;
}

/* optional: keeps login box readable */
.card {
  background-color: rgba(255, 255, 255, 0.9);
}
</style>

<!-- Wrap your page content -->
<div class="main-content">
  <div class="container mt-5">

    <div class="row justify-content-center">
      <div class="col-md-5">

        <div class="card p-4">
          <h3 class="text-center mb-4">Login</h3>

          <form action="login_process.php" method="POST">
            <div class="mb-3">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Login</button>
          </form>

          <p class="text-center mt-3">
            Don't have an account?
            <a href="register.php">Register</a>
          </p>
        </div>

      </div>
    </div>

  </div>
</div>

<?php
include 'includes/footer.php';
?>
