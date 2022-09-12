<?php include('config.php') ?>

<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" href="login.css">
      

    </head>
<div class="login-box">
    <h2>Login</h2>

    <form action="code.php" method="POST">
      
      <div class="user-box">
        <input type="text" name="email" required="">
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
      </div>
      
      <div class="login_btn"><input type="submit" name="login_user" />
     </div>
     

      <a href="adminlogin.html">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Admin-panel
      </a>
    </form>
  </div>
  </html>