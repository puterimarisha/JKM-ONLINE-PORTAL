<?php session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Certificate Generator</title>
  </head>
  <body>
    <center>
      <br><br><br>
      <h3>Certificate</h3>
<br><br>
    <?php 
    include("dbAdmin.php"); 


$query="SELECT * FROM  event_volunteer 
        JOIN manageevent ON event_volunteer.eventID=manageevent.eventID
        JOIN vol_profile ON event_volunteer.volunteerID=vol_profile.volunteerID
        WHERE event_volunteer.volunteerID=".$_SESSION['volunteerID']."
        AND event_volunteer.eventID=".$_GET['eventID']."";
$result = mysqli_query($conn, $query); 

if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)) { 
    
        $eventName = $row["eventName"];
        $eventDate = $row["eventDate"];
  	$Vname = $row["Vname"];


  }
}
?>
<?php

        $name = strtoupper($Vname);
        $name_len = strlen($Vname);
        $event = strtoupper($eventDate);
        $event_len = strlen($eventDate);
        $occupation = strtoupper("  JABATAN KEBAJIKAN MALAYSIA");
        
                

        if ($occupation) {
          $font_size_occupation = 10;


        if ($name == "" || $occupation == "") {
          echo 
          "
          <div class='alert alert-danger col-sm-6' role='alert'>
              Ensure you fill all the fields!
          </div>
          ";
        }else{
          echo 
          "
          <div class='alert alert-success col-sm-6' role='alert'>
              Congratulations! $name on your excellent success.
          </div>
          ";

          //designed certificate picture
          $image = "cert3.png";

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

          //we then set the x and y axis to fix the position of our text occupation
          $origin1_x = 120;
          $origin1_y=90;

          //we then set the differnet size range based on the lenght of the text which we have declared when we called values from the form
          if($name_len<=7){
            $font_size = 25;
            $origin_x = 190;
          }
          elseif($name_len<=12){
            $font_size = 30;
          }
          elseif($name_len<=15){
            $font_size = 26;
          }
          elseif($name_len<=20){
             $font_size = 18;
          }
          elseif($name_len<=22){
            $font_size = 15;
          }
          elseif($name_len<=33){
            $font_size=11;
          }
          else {
            $font_size =10;
          }

          $certificate_text = $name;
          $certificate_date = $event;

          //font directory for name
          $drFont = dirname(__FILE__)."/developer.ttf";

          // font directory for occupation name
          $drFont1 = dirname(__FILE__)."/Gotham-black.otf";

          //function to display name on certificate picture
          $text1 = imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $black,$drFont, $certificate_text);

          //function to display occupation name on certificate picture
          $text2 = imagettftext($createimage, $font_size_occupation, $rotation, $origin1_x+2, $origin1_y, $black, $drFont1, $occupation);

   	  $text3 = imagettftext($createimage, 11, $rotation, 169, 365, $black,$drFont1, $certificate_date);

          imagepng($createimage,$output,3); 

 ?>
        <!-- this displays the image below -->
        <img src="<?php echo $output; ?>">
        <br> 
        <br>

        <!-- this provides a download button -->
        <a href="<?php echo $output; ?>" class="btn btn-success" download>Download My Certificate</a>
        <br><br>
<?php 
        }
      }

     ?>

    </center>

      <footer>  
          <center><p>Built with &#10084; by <a href="joel-new.netlify.app">Jabatan Kebajikan Malaysia</a></p></center>
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
