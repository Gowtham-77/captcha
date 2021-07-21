 <?php
   session_start();
   if(isset($_POST['submit']))
   {
    $sessionCaptcha = $_SESSION['captcha'];
    $formCaptcha = $_POST['captcha'];
    if($sessionCaptcha == $formCaptcha)
    {
        echo "verified";
    }
    else
    {
        echo "Sorry";
    }
   }
   ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>Captcha in Form</title>
 </head>
 <body>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      Name:<input type="text" name="user"><br>
      Type captcha:<input type="text" name="captcha"> 
      <div class="col-lg-2" style="margin-down:100px;">
        <img src="captcha.php"><br>
  </div>
      <input type="submit" value="verify" name="submit">
      </form>

 </body>
 </html>