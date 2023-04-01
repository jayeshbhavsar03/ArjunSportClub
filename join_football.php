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
    <title>football</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'join_header.php'; ?>

    <div class="heading">
        <h3>football</h3>
        <p> <a href="home.php">home</a> / football </p>
    </div>


    <section class="products">

        <h1 class="title">football Academy</h1>
        <div class="image" style="    display: flex;
    justify-content: center;">
            <img src="images/main2.svg" alt="" style="    width: 35%;
    margin: 2rem;">
        </div>
        <p style="    margin: 4rem 15rem;
    font-size: 2rem;
    text-align: center;">football Academy is one of our best coaching centres for football. With our Head
            Coach, Samad Fallah, who is a first-class footballer and international coach, ISST provides coaching to young
            kids from the age of 6 years. Our senior team is also trained at our coaching centre in Pune. Our football
            infrastructure includes a stadium-quality turf wicket and artificial grass playing area. The academy boasts
            of an automatic bowling machine from BOLA, the UK which is used by the academy for advanced training drills.
        </p>
        <div style="    display: flex;
    justify-content: center;">
            <h4 style="    font-size: 1.7rem;"><b>Price:</b></h4> 
            <ul style="    list-style: none; display:flex;">
                <li style="
    font-size: 1.3rem;
    padding: 0.4rem;
"><b> Paltinum:</b><span style="    color: red;"> ₹ 3000/-</span></li>
                <li style="
    font-size: 1.3rem;
    padding: 0.4rem;
"><b> Gold:</b><span style="    color: red;"> ₹ 2000/-</span></li>
                <li style="
    font-size: 1.3rem;
    padding: 0.4rem;
"><b> Silver:</b><span style="    color: red;"> ₹ 1000/-</span></li>
            </ul>
        </div>

        <div style="display: flex;justify-content: center;"><a href="enroll_football.php" class="option-btn">Enroll</a></div>
                        
    </section>


    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>