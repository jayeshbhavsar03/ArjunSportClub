<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Clubs</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/admin_style.css?v=<?php echo time();?>">


</head>

<body>

    <?php include 'admin_header.php'; ?>

    <section class="users">

        <h1 class="title">Sports Clubs</h1>

        <div class="box-container">

            <?php  
$select_products = mysqli_query($conn, "SELECT * FROM `club`") or die('query failed');
if(mysqli_num_rows($select_products) > 0){
while($fetch_products = mysqli_fetch_assoc($select_products)){
?>
            <form action="" method="post" class="box">
                <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                <div class="box-content">
                    <div class="name" style="
    font-size: 5rem;
    padding-top: 2rem;
"><?php echo $fetch_products['name']; ?></div>
                    <div class="description" style="    font-size: 1.5rem;
    padding: 1rem 5rem;
"><?php echo $fetch_products['description']; ?></div>
                    <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                </div>
            </form>
            <?php
}
}else{
echo '<p class="empty">no products added yet!</p>';
}
?>
        </div>

    </section>









    <!-- custom admin js file link  -->
    <script src="js/admin_script.js"></script>

</body>

</html>