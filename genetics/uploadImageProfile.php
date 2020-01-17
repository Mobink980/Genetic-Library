<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php

            //helping to upload the profile image
            echo '<div class="container">
             <form action="upload.php" method="POST" enctype="multipart/form-data"> 
            <!--The upload input with the type file-->
            <br><br>
            <input id="input1"  type="file" name="file">
            <br><br><br>
            <!--The submit button with the type submit-->
            <button class="btn btn-primary btn-block" type="submit" name="profile-img-submit"><span class="glyphicon glyphicon-upload">
            </span> UPLOAD</button>
            </form>
            </div>';

            