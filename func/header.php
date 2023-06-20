<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CIMEN</title>
  </head>
  <body>
    <header>
      <img class="logo" src="assets/exam.png" alt="">
      <input type="checkbox" id="mobile-icon">
      <label for="mobile-icon" class="toggle"><span class="hamburger-icon"></span></label>
      <nav>
        <ul class="nav-items">
          <li>
            <a href="#">Home</a>
          </li>
          <li>
            <a class="hide-mobile" href="#">Account<span class="arrow">&#x25bc;</span></a>
            <label for="submenu"> Account<span class="arrow">&#x25bc;</span></label>
            <input id="submenu" type="checkbox">
            <ul class="submenu-1">
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
          </li>
          
        </ul>
      </nav>
    </header>
    

  <!-- start #main-site -->
  <main id="main-site">   