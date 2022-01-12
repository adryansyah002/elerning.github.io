<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>
<!doctype html>
</html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">    
<style>
body {
  background-image: url('login.jpg');
  background-size: cover;
}
</style>

<style>
.button {
  display: flex;
  justify-content: center;
  align-items: center;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #FF0000;
}

.button1:hover {
  background-color: #FF0000;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #FF0000;
}

.button2:hover {
  background-color: #FF0000;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #FF0000;
}

.button3:hover {
  background-color: #FF0000;
  color: white;
}
</style>

<header class="w3-container w3-red">
  <h2>Welcome To El Learning</h2>
</header>

<div class="w3-container w3-center">
  <hr>
  <h3></h3>
</div>

<div class="w3-collum-padding"> 

<div class="w3-third">
<div class="w3-card-4">
  <img src="book.jpg" alt="Car" style="width:100%">
  <div class="w3-container">
  <p></p>
  </div>
   <style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
</style>
</head>
<body>
<div class="center">
    <button class="button button1" onclick="location.href = 'video.html';" >Materi</button>

</div>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
  <img src="video.jpg" alt="Car" style="width:100%">
  <div class="w3-container">
  <p></p>
  </div>
   <style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
</style>
</head>
<body>
<div class="center">
    <button class="button button2" onclick="location.href = 'video.html';" >Video</button>

</div>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
  <img src="tugas.jpg" alt="Car" style="width:100%">
  <div class="w3-container">
  <p></p>
  </div>
   <style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
</style>
</head>
<body>
<div class="center">
    <button class="button button3" onclick="location.href = 'video.html';" >Tugas</button>

</div>
</div>
</div>
</div>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}
</style>
</head>
<body>

<div class="footer">
     <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
  <p>                           </p>
</div>

</body>
</html> 