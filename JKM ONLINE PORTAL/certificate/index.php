<html>
<body>   
<form method="post" action="">
      <div class="form-group col-sm-6">
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name Here...">
      </div>
      <button type="submit" name="generate" class="btn btn-primary">Generate</button>
    </form>
 <?php 

      if (isset($_POST['generate'])) {
header('content-type:image/png');
        $name = strtoupper($_POST['name']);
        

          //designed certificate picture
          $image = "cert1.png";

          $createimage = imagecreatefrompng($image);

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
          $drFont = dirname(http://localhost/RELATIES%20ONLINE%20PORTAL/certificate/)."PlayfairDisplay.ttf";

          //function to display name on certificate picture
          $text1 = imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $black, $drFont, $certificate_text)

          imagepng($createimage,$output,$text1,3);
          imagedestroy($createimage,$output,$text1,3);
}

 ?>
</body>
</html>