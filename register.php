```php
<?php include 'includes/header.php'; ?>

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-5">

<div class="card p-4">

<h3 class="text-center mb-4">Register</h3>

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

<button type="submit" class="btn btn-success w-100">Register</button>

</form>

<p class="text-center mt-3">
Already have an account? <a href="login.php">Login</a>
</p>

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
}else{
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
}else{
error.style.display = "none";
return true;
}

}

function validateForm(){

let nameValid = validateName();
let passValid = validatePassword();

if(!nameValid || !passValid){
return false;
}

return true;

}

</script>

<?php include 'includes/footer.php'; ?>
```
