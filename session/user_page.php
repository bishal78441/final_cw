<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="logout.php" class="btn">logout</a>
      <p>Scroll down!!!!</p>
   </div>
</div>

<div class="container">
<div class="content">
    <p>if you want to create a CV click the create <span>Cv button</span></p>
    <p><p><a href="CV-Generator-master/index.php" class="btn">Create Cv</a></p></p>
</div>



<div class="container">
   <div class="content">
      <p>if you want to create a protfolio click the create <span>Cv button</span></p>
      <p><p><a href="/cw1-bishal78441/freelance/index.php" class="btn">Create Protfolio</a></p></p>
   </div>
</div>
</body>
</html>