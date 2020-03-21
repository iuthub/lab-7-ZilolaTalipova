<?php

session_start();
include_once 'phpconnection.php';
if(isset($_POST['register'])){
  $username= mysqli_real_escape_string($db ,$_POST['username']);
  $fullname=  mysqli_real_escape_string($db,$_POST['fullname']);
  $email=  mysqli_real_escape_string($db, $_POST['email']);
  $pwd=  mysqli_real_escape_string($db, $_POST['pwd']);
  $confirm_pwd=  mysqli_real_escape_string($db, $_POST['confirm_pwd']);


  $sql = "INSERT INTO  users (username, fullname, email, password)
            VALUES ('$username', '$fullname', '$email', '$pwd');";
  mysqli_query($db, $sql);
  $_SESSION['username']=$username;
  $_SESSION['success']="You are now logged in";
  header("Location: ../index.php?signUp=success");

  }
  if (isset($_POST['login_user'])) {
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $pwd=  mysqli_real_escape_string($db, $_POST['pwd']);
    $sql = "SELECT * FROM  users WHERE username='$username' AND password='$pwd';";
    $result= mysqli_query($db, $sql);
    if(mysqli_num_rows($result)==1){
      $_SESSION['username']=$username;
      $_SESSION['success']="You are now logged in";
      header('location: loggedIn.php');
    } else{
      echo " wrong username and password ";
    }
  }

  if(isset($_POST['posted'])){
    $id=mysqli_real_escape_string($db, $_POST['id']);
    $title=mysqli_real_escape_string($db, $_POST['title']);
    $body=mysqli_real_escape_string($db, $_POST['body']);
    $userId=mysqli_real_escape_string($db, $_POST['userId']);
    $sql="INSERT INTO posts (title, body, publishDate, userId)
           VALUES ('$title', '$body', date(), '$id')   ;";

    $result=mysqli_query($db, $sql);
    $_SESSION['message'] = "Post is saved";
    header('location: loggedIn.php');

  }
  $result=mysqli_query($db, "SELECT * FROM posts  ");
?>
