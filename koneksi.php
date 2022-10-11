<?php
 if ( isset($_SESSION["admin"])) {
    header("Location:admin.php");
    exit;
  }
  // elseif (isset($_SESSION["user"])) {
  //   header("Location:admin.php");
  //   exit;
  // }

  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' AND $password == 'admin123') {
        $_SESSION["admin"] = true;
        header("Location:admin.php");
        exit;
    }elseif($username == 'user' AND $password == 'user123'){
      $_SESSION["user"] = true;
      header("Location:index.php");
      exit;
    }else{
      $salah = "<p style='color:red; text-align:center;'>username dan password salah</p>";
    }
  }