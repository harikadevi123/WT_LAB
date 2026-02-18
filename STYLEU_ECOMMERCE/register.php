<?php
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli("localhost","root","","user_auth");

if($conn->connect_error){
    die("DB Error");
}

/* Check email */
$check = $conn->prepare("SELECT id FROM users WHERE email=?");
$check->bind_param("s",$email);
$check->execute();
$check->store_result();

if($check->num_rows > 0){

    echo "<script>
        alert('Email already registered!');
        window.location='register.html';
    </script>";
    exit();
}

/* Insert plain password */
$stmt = $conn->prepare(
"INSERT INTO users(username,email,password) VALUES(?,?,?)"
);

$stmt->bind_param("sss",$username,$email,$password);

$stmt->execute();

$_SESSION['user'] = $username;

echo "<script>
    alert('Registration Successful!');
    window.location='home.php';
</script>";

$conn->close();
?>
