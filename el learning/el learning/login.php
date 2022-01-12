<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="css/style.css">    
</head>    
<style>
body {
  background-image: url('login.jpg');
  background-size: cover;
}
</style>
<body>    
    <h2>Login Page</h2><br>    
    <div class="login">    
    <form method="post" action="">    
        <!--- Tabel Username --->
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" id="txt_uname" name="txt_uname" placeholder="Username">    
        <br><br>

        <!--- Tabel Password --->    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" id="txt_uname" name="txt_pwd" placeholder="Password">    
        <br><br>

        <!--- Tombol Login --->
        <input type="submit" name="but_submit" id="but_submit" value="Log In Here";>     
        <br><br>
  
    </form>     
</div>    
</body>    
</html>     