<?php
    $connection = mysqli_connect('localhost','root', '', 'myblog');
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
        
        $input = mysqli_query($connection, "INSERT INTO blogdata(id, title, description) VALUE ('$id', '$title', '$description");
        if($input){
            header('location:http://localhost/blog/blog.html');
        }

        else{
            header('location:http://localhost/blog/signin.html');
        }
?>