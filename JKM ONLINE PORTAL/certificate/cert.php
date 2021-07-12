<php
header('content-type:image/jpeg');
$font="PlayfairDisplay.TTF";
$image=imagecreatefromjpeg("0001.jpg");
$color=imagecolorallocate($image,19,21,22);
$name="PUTERI";
imagettftext($image,50,0,360,420,$color,$font,$name);
imagejpeg($image);
imagedestroy($image);

    if (isset($_POST['generate'])) {
        $name = strtoupper($_POST['name']);
        

          //designed certificate picture
          $image = "pic.jpg";

          $createimage = imagecreatefromjpeg($image);

          //this is going to be created once the generate button is clicked
          $output = "certificate.png";

          //then we make use of the imagecolorallocate inbuilt php function which i used to set color to the text we are displaying on the image in RGB format
          $white = imagecolorallocate($createimage, 205, 245, 255);
          $black = imagecolorallocate($createimage, 0, 0, 0);

          //Then we make use of the angle since we will also make use of it when calling the imagettftext function below
          $rotation = 0;

          //we then set the x and y axis to fix the position of our text name
          $origin_x = 200;
          $origin_y=260;
          
          $font_size = 10;
          
          $certificate_text = $name;

          //font directory for name
          $drFont = dirname(__FILE__)."/developer.ttf";

          //function to display name on certificate picture
          $text1 = imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $black, $drFont, $certificate_text);

          imagepng($createimage,$output,3);


?>