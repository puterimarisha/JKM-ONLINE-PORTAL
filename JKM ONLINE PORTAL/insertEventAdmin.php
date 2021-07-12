<!-- insertEventAdmin.php -->

<?php
session_start();
include("dbAdmin.php");
$status = $statusMsg = '';
if(isset($_POST["submit"])){ 

extract($_POST);
$query = "INSERT INTO manageevent (eventImage, eventName, eventDate, eventTime, eventLocation, eventDesc, eventPoint)
VALUES ('$eventImage', '$eventName', '$eventDate', '$eventTime', '$eventLocation', '$eventDesc', '$eventPoint')";

$eventID = $_GET['eventID'];
$_Session['eventID']=$eventID;

    $status = 'error'; 
    if(!empty($_FILES["eventImage"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["eventImage"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['eventImage']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into images (image, uploaded) VALUES ('$imgContent', NOW())"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 


if (mysqli_query($conn, $query)) {

	echo "<script type='text/javascript'> window.location='viewEvent.php' </script>";
	
} else {
	echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>
