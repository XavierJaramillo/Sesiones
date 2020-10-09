<?php

    include 'connection.php';

    if(isset($_POST['email'])) {
        //echo md5($_POST['pass']);
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $query = 'SELECT * FROM tbl_user WHERE email="'.$email.'" AND pass="'.$pass.'"';
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)==1) {
            $row = mysqli_fetch_array($result);
            session_start();
            $_SESSION['email']=$row['email'];
            $_SESSION['id_user']=$row['id_user'];
            header('Location:../view/home.php');
        } else {
            header('Location:../index.php');
        }

    } else {
        header('Location:../index.php');
    }

?>