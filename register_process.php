```php
<?php

include 'includes/db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$sql = "INSERT INTO users (name,email,password)
        VALUES ('$name','$email','$password')";

if(mysqli_query($conn,$sql)){

    header("Location: login.php");
    exit();

}else{
    echo "Error: " . mysqli_error($conn);
}

?>
```
