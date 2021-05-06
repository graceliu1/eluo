<nav class="navbar flex-wrap navbar-expand-md  navbar-light"> 
    <div class = "container d-flex">
    <!-- Brand --> 
    <a class="navbar-brand" href="#"> <img id="logo" alt="Logo" src="Images/LargeLogo.png" width="70" height="70"> <span style ="max-width: 70%">invictus<b><em>revolutionize the way you eat</em></b></span> </a> 
    
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
    
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link <?php echo ($filename == 'index.php')? 'active':''; ?>" href="index.php">Home</a> </li>
        <li class="nav-item"> <a class="nav-link <?php echo ($filename == 'result.php')? 'active':''; ?>" href="result.php">Results</a> </li>
        <li class="nav-item"> <a class="nav-link <?php echo ($filename == 'guide.php')? 'active':''; ?>" href="guide.php">How to Use</a> </li>
        <li class="nav-item"> <a class="nav-link <?php echo ($filename == 'contact.php')? 'active':''; ?>" href="contact.php">Contact</a> </li>
       
      </ul>
      <a href="result.php" class="social social-link"><i class="fas fa-utensils"></i></a>

    
    </div>
    </div>
</nav>