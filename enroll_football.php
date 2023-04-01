<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['order_btn'])){

   $sp_name = mysqli_real_escape_string($conn, $_POST['sp_name']);
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $number = $_POST['number'];
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $method_plans = mysqli_real_escape_string($conn, $_POST['method_plans']);
   $gender = mysqli_real_escape_string($conn, $_POST['gender']);
   $dob = mysqli_real_escape_string($conn, $_POST['dob']);
   $JoinDate = mysqli_real_escape_string($conn, $_POST['jd']);
   $address = mysqli_real_escape_string($conn, 'flat no. '. $_POST['addr'].', '. $_POST['city'].', '. $_POST['country'].' - '. $_POST['pin_code']);

   

         mysqli_query($conn, "INSERT INTO `football_enroll`(user_id, sp_name, name, number, email, method_plans, gender, dob, JoinDate, address) VALUES('$user_id', '$sp_name', '$name', '$number', '$email', '$method_plans', '$gender', '$dob', '$JoinDate', '$address')") or die('query failed');
         $message[] = 'order placed successfully!';
     
   

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'join_header.php'; ?>

    <div class="heading">
        <h3>Enroll</h3>
        <p> <a href="home.php">home</a> / Enroll </p>
    </div>

    <section class="checkout">

        <form action="" method="post">
            <h3>Registration</h3>
            <div class="flex">
                <div class="inputBox">
                    <span>sport name :</span>
                    <select name="sp_name">
                        <option value="football">football</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>your name :</span>
                    <input type="text" name="name" required placeholder="enter your name">
                </div>
                <div class="inputBox">
                    <span>your number :</span>
                    <input type="number" name="number" required placeholder="enter your number">
                </div>
                <div class="inputBox">
                    <span>your email :</span>
                    <input type="email" name="email" required placeholder="enter your email">
                </div>
                <div class="inputBox">
                    <span>Which plans you want :</span>
                    <select name="method_plans">
                        <option value="3000">Paltinum</option>
                        <option value="2000">Gold</option>
                        <option value="1000">Silver</option>
                    </select>
                </div>
                <div class="inputBox" style="display: flex;align-items: center;">
                    <span style="width: 15%;">Gender :</span>
                    <input type="radio" name="gender" value="male" id="" style="width: 5%;height: 20%;margin: 0;" checked><span style="    margin: 2rem;    margin-left: 0.5rem;">Male</span> 
                    <input type="radio" name="gender" value="female" id="" style="width: 5%;height: 20%;margin: 0;"><span style="    margin: 2rem;    margin-left: 0.5rem;">Female</span> 
                </div>
                <div class="inputBox">
                    <span>Date of Birth :</span>
                    <input type="date" min="0" name="dob" required placeholder="">
                </div>
                <div class="inputBox">
                    <span>When You Join :</span>
                    <input type="date" min="0" name="jd" required placeholder="">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="addr" required placeholder="e.g. flat no., street name">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="city" required placeholder="e.g. mumbai">
                </div>
                <div class="inputBox">
                    <span>state :</span>
                    <input type="text" name="state" required placeholder="e.g. maharashtra">
                </div>
                <div class="inputBox">
                    <span>country :</span>
                    <input type="text" name="country" required placeholder="e.g. india">
                </div>
                <div class="inputBox">
                    <span>pin code :</span>
                    <input type="number" min="0" name="pin_code" required placeholder="e.g. 123456">
                </div>
            </div>
            <input type="submit" value="Enroll now" class="btn" name="order_btn">
        </form>

    </section>









    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>