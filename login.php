<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-cover" style="background-image: url(bglautt.png) "  >
    <h2 class="w-6">Login</h2>
    
    <form class="m-auto"  autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="login">
      <label class="w-6" for="">Username</label>
      <input  class="bg-slate-500" type="text" id="username" value=""> <br><br>
      <label for="">Password</label>
      <input class="bg-slate-500" type="password" id="password" value=""> <br><br>
      <button type="button" onclick="submitData();">Login</button>
    </form>
    
    <br>
    <a href="register.php">Go To Register</a>
    <?php require 'script.php'; ?>
  </body>
</html>
