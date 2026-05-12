<?php include 'includes/header.php'; ?>

<style>
html, body {
  height: 100%;
  margin: 0;
}

/* Flex layout */
body {
  display: flex;
  flex-direction: column;
  background-image: url('images/bg4.jpeg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}

/* Main content should grow */
.main-content {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}


/* keep form readable */
.card {
  background-color: rgba(255, 255, 255, 0.9);
}
</style>

<div class="main-content">
  <div class="container ">
  <div class="row justify-content-center">
  <div class="col-md-5">

        <div class="card p-4">
          <h3 class="mb-4">Register</h3>

          <form action="register_process.php" method="POST" onsubmit="return validateForm()">

            <div class="mb-3">
              <label>Name</label>
              <input type="text" name="name" id="name" class="form-control" oninput="validateName()" required>

              <small id="nameError" class="text-danger" style="display:none;">
                Name should contain only letters. Numbers are not accepted.
              </small>
            </div>

            <div class="mb-3">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Password</label>
              <input type="password" name="password" id="password" class="form-control" oninput="validatePassword()" required>

              <small id="passError" class="text-danger" style="display:none;">
                Password must be at least 8 characters and include one uppercase letter, one lowercase letter and one number.
              </small>
            </div>

            <div class="mb-3">
              <label>Confirm Password</label>
              <input type="password" name="confirm_password" id="confirm_password" class="form-control" oninput="validateConfirmPassword()" required>

              <small id="confirmError" class="text-danger" style="display:none;">
                Passwords do not match.
              </small>
            </div>

            <button type="submit" class="btn btn-success w-100">Register</button>

          </form>

          <p class="mt-3">
            Already have an account? <a href="login.php">Login</a>
          </p>

        </div>

      </div>
    </div>
  </div>
</div>

<script>
function validateName(){
  let name = document.getElementById("name").value;
  let error = document.getElementById("nameError");

  if(/[0-9]/.test(name)){
    error.style.display = "block";
    return false;
  } else {
    error.style.display = "none";
    return true;
  }
}

function validatePassword(){
  let password = document.getElementById("password").value;
  let error = document.getElementById("passError");

  let pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;

  if(!pattern.test(password)){
    error.style.display = "block";
    return false;
  } else {
    error.style.display = "none";
    return true;
  }
}

function validateConfirmPassword(){
  let password = document.getElementById("password").value;
  let confirmPassword = document.getElementById("confirm_password").value;
  let error = document.getElementById("confirmError");

  if(password !== confirmPassword){
    error.style.display = "block";
    return false;
  } else {
    error.style.display = "none";
    return true;
  }
}

function validateForm(){
  let nameValid = validateName();
  let passValid = validatePassword();
  let confirmValid = validateConfirmPassword();

  if(!nameValid || !passValid || !confirmValid){
    return false;
  }
  return true;
}
</script>

<?php include 'includes/footer.php'; ?>
