<?php
    $connection = mysqli_connect('localhost','root', '', 'myblog');
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $checkdata = mysqli_query($connection, "SELECT * FROM userdata WHERE email = '$email'");
    $check = mysqli_no_rows($checkdata);

    if($check > 0){
        header('location:http://localhost/blog/blog.html');
    }
    else{
        header('location:http://localhost/blog/signin.html');
    }
?>