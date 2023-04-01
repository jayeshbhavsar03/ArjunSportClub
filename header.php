<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo"><i class='fas fa-basketball-ball' style='font-size:24px'></i> Arjun Sports Club</a>

         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="sport.php">Sports</a>
            <a href="orders.php">Eroll</a>
            <a href="contact.php">Contact</a>
         </nav>

         <div class="icons">
            <div id="user-btn" class="fas fa-user"></div>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>