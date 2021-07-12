<?php
session_start();
$_GET['eventID'];
include("dbAdmin.php");
$_SESSION['eventID']=$_GET['eventID'];
?>
<!DOCTYPE html>
<html>
    <head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
body
{
  background-color: #DAF7A6 ;
}
.container{
   margin: 100px 100px 150px 100px;
   align:center;
   
}
</style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <video id="preview" width="100%"></video>
                </div>
                <div class="col-md-6">
                <form  action="insertscanner.php" method="post" class="form-horizontal">
                    <label>SCAN QR CODE</label>
                    <input type="hidden" name="text" id="text" readonyy="" placeholder="scan qrcode">             
                </form> 
                </div>
            </div>
        </div>

        <script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               document.getElementById('text').value=c;
               document.forms[0].submit();
               alert("Successful Attend The Event!!");
           });

        </script>
    </body>
</html>