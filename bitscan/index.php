<!DOCTYPE html>
<html>
  <head>
    <title>Instascan</title>
    <script type="text/javascript" src="instascan.min.js"></script>
  </head>
  <style>
      #preview{
          width: 50%;
          height: 200px;
          margin-left: 25%;
    }
      #address{
          margin-left: 43%;
      }
  </style>  
  <body>
    <video id="preview"></video><br>
    
    <form action="" method="post">
        <input type="text" id="address" name="address">    
    </form>
    
     <script type="text/javascript">
         
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        document.getElementById("address").value = content;
      });
         
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
         
    </script>
  
  </body>
</html>


<?php
    if(isset($_POST['address'])){
        $address = $_POST['address'];
        
        echo "$address";
    }
?>