<?php
   session_start();
   $change_time = md5(microtime());
   $get_value = substr($change_time, 0,6);
   $_SESSION['captcha'] = $get_value;
   //echo "$get_value";
   $create_image = imagecreate(100, 30);
   imagecolorallocate($create_image, 200, 220, 255);
   $text_color = imagecolorallocate($create_image, 0, 0, 0);
   imagestring($create_image, 5, 10, 7, $get_value, $text_color);
   header("Content-Type:image/jpeg");
   imagejpeg($create_image);
    
?>
 
