<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="Assets/CSS/login.css">

</head>
<body>




<section class="form-container">
   <form action="" method="post" enctype="multipart/form-data">
      <h3>login now</h3>
      <p>your email <span>*</span></p>
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      <p>your password <span>*</span></p>
      <input type="password" name="pass" placeholder="enter your password" required maxlength="20" class="box"> 
      <p>Forgot password?</p>
      <input type="submit" value="login new" onclick="window.location='portal/home.html'" name="submit" class="btn">
      <p>Don't Have Account Yet?  <a href="">sign-up</a></p>
   </form>
</section>


<!-- <footer class="footer">

   &copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!

</footer> -->
   
</body>
</html>