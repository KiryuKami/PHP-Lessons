<?php
session_start();
?>
<nav class="navbar navbar-expand-lg bg-secondary bunga">
<div class="container-fluid bunga">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler bunga" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse bunga" id="navbarNav">
  <ul class="navbar-nav bunga">
    <li class="nav-item bunga">
      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
    </li>
    <li class="nav-item bunga">
      <a class="nav-link" href="calculator.php">Calculator</a>
    </li>
    <li class="nav-item bunga">
      <a class="nav-link" href="loops.php">Loops</a>
    </li>
    <li class="nav-item bunga">
      <a class="nav-link" href="condtionionals.php">Condtionionals</a>
    </li>
    <li class="nav-item bunga">
      <a class="nav-link" href="calender.php">Calender</a>
    </li>
    <li class="nav-item bunga">
      <a class="nav-link" href="functions.php">Functions</a>
    </li>
  </ul>
</div>
</div>
<div>
  <form action="includes/login.inc.php" method = "post" >
<input type="text" name = "mailuid" placeholder = "Username/E-mail...">
<input type="password" name = "pwd" placeholder = "Password...">
<button type = "submit" name = "login-submit">Login</button>
  </form>
 <a href="signup.php">Signup</a>
 
 <form action="includes/logout.inc.php">
 <button type = "submit" name = "logout-submit">Logout</button>
 </form>
</div>
</nav>
<?php
$_SESSION['username'] = "KiryuKami9x";
echo $_SESSION ['username'];
if (!isset($_SESSION['username'])) {
  echo "You are not logged in!";
} else {
  echo "You are logged in!";    
}
?>

