<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about_ig.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Arjun Sports Club, founded on 01th Feb 2023, is the centre for sports education. Arjun Sports Club is the first institute in INDIA providing courses in Sports Education & Sports Management Education. Modern sport covers a broad range of areas, be it ethics, medicine, technology, finance, law, education or sociology, to name a few.
<br>
At this beginning of a new era, the sport is in urgent need of highly competent, well trained and experienced sports administrators. Arjun Sports Club with its modern course structure will provide a launchpad for those who wish to pursue a career in the field of sports.
<br>
The “Arjun Sports Club” will have a unique network of multi-field expertise; it will develop and apply knowledge to the study of sports in connection with technology, management, medicine, biology, law, economics, logistics and sociology, to name just a few. Arjun Sports Club supports sports innovations, technology transfer and business development.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>