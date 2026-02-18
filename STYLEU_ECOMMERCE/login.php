<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli("localhost","root","","user_auth");

if($conn->connect_error){
    die("DB Error");
}

$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
$stmt->bind_param("s",$email);
$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows == 1){

    $row = $result->fetch_assoc();

    if($password == $row['password']){

        $_SESSION['user'] = $row['username'];

        echo "<script>
            alert('Login Successful!');
            window.location='home.php';
        </script>";
    }
    else{
        echo "<script>
            alert('Wrong Password!');
            window.location='login.html';
        </script>";
    }
}
else{
    echo "<script>
        alert('User Not Found!');
        window.location='login.html';
    </script>";
}

$conn->close();
?>
