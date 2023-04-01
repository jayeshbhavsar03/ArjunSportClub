<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

if(isset($_POST['update_order'])){

   $order_update_id = $_POST['order_id'];
   $update_payment = $_POST['update_payment'];
   mysqli_query($conn, "UPDATE `badminton_enroll` SET payment_status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
   $message[] = 'payment status has been updated!';

}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `badminton_enroll` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_orders.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrolled Students</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/admin_style.css?v=<?php echo time();?>">

</head>

<body>

    <?php include 'admin_header.php'; ?>

    <section class="orders">

        <h1 class="title"></h1>

        <div class="box-container"  style="display: flex;max-width: 100%;padding: 3rem;width: 100%;">

            <div class="box">
                <?php
            $total_pendings = 0;
            $select_pending = mysqli_query($conn, "SELECT method_plans FROM `badminton_enroll` WHERE payment_status = 'pending'") or die('query failed');
            if(mysqli_num_rows($select_pending) > 0){
               while($fetch_pendings = mysqli_fetch_assoc($select_pending)){
                  $method_plans = $fetch_pendings['method_plans'];
                  $total_pendings += $method_plans;
               };
            };
         ?>
                <h3>₹<?php echo $total_pendings; ?>/-</h3>
                <p>total pendings</p>
            </div>

            <div class="box"  style="display: flex;max-width: 100%;padding: 1rem;width: 100%;">
                <?php
            $total_completed = 0;
            $select_completed = mysqli_query($conn, "SELECT method_plans FROM `badminton_enroll` WHERE payment_status = 'completed'") or die('query failed');
            if(mysqli_num_rows($select_completed) > 0){
               while($fetch_completed = mysqli_fetch_assoc($select_completed)){
                  $method_plans = $fetch_completed['method_plans'];
                  $total_completed += $method_plans;
               };
            };
         ?>
                <h3>₹<?php echo $total_completed; ?>/-</h3>
                <p>completed payments</p>
            </div>

            <div class="box">
                <?php 
            $select_orders = mysqli_query($conn, "SELECT * FROM `badminton_enroll`") or die('query failed');
            $number_of_orders = mysqli_num_rows($select_orders);
         ?>
                <h3><?php echo $number_of_orders; ?></h3>
                <p>order placed</p>
            </div>
        </div>

        <div class="box-container">
            <?php
      $select_orders = mysqli_query($conn, "SELECT * FROM `badminton_enroll`") or die('query failed');
      if(mysqli_num_rows($select_orders) > 0){
         while($fetch_orders = mysqli_fetch_assoc($select_orders)){
      ?>
            <div class="box" style="border:0; border-radius:0;">
                <p> user id : <span><?php echo $fetch_orders['user_id']; ?></span> </p>
                <p> name : <span><?php echo $fetch_orders['name']; ?></span> </p>
                <p> number : <span><?php echo $fetch_orders['number']; ?></span> </p>
                <p> email : <span><?php echo $fetch_orders['email']; ?></span> </p>
                <p> address : <span><?php echo $fetch_orders['address']; ?></span> </p>
                <p> plan : <span><?php echo $fetch_orders['method_plans']; ?></span> </p>
                <p> gender : <span><?php echo $fetch_orders['gender']; ?></span> </p>
                <p> date of birth : <span><?php echo $fetch_orders['dob']; ?></span> </p>
                <p> joing date : <span><?php echo $fetch_orders['JoinDate']; ?></span> </p>
                <p> payment status :</p>
                <form action="" method="post">
                    <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
                    <select name="update_payment">
                        <option value="" selected disabled><?php echo $fetch_orders['payment_status']; ?></option>
                        <option value="pending">pending</option>
                        <option value="completed">completed</option>
                    </select>
                    <input type="submit" value="update" name="update_order" class="option-btn">
                    <a href="admin_orders.php?delete=<?php echo $fetch_orders['id']; ?>"
                        onclick="return confirm('delete this order?');" class="delete-btn">delete</a>
                </form>
            </div>
            <?php
         }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>
        </div>

    </section>








    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>