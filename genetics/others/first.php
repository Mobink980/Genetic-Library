<!doctype html>
<!--This php file is used as an interface to upload files to the server. We take the file
from the user and send the uploaded file with the post method to the upload.php-->
<html>
<head>
<meta charset="UTF-8">
<title>upload</title>
<!-- Bootstrap -->
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="angular-1.7.8/angular.min.js"></script>
<style>
    #form{
        margin-top: 30px;
    }

</style>

</head>

<body> 
    <div class="container-fluid" style="background-color: #444444">

        <h2 style="color: white">Upload a File</h2>
    </div>
        <!--A form for uploading and submitting the file.-->
        <div class="container" id="form"> 
            <!--enctype specifies how the form data should be encoded.
            multipart/form-data: The value used for an <input> element with the type attribute set to "file".-->
            <!--posting the uploaded file to the upload.php-->
            <form action="upload.php" method="POST" enctype="multipart/form-data"> 
                <!--The upload input with the type file-->
                <input id="input1" class="btn btn-danger col-md-4 col-sm-6 col-sm-offset-0 col-xs-offset-1 col-xs-10"  type="file" name="file">
                <br><br><br>
                <!--The submit button with the type submit-->
                <button class="btn btn-primary btn-block" type="submit" name="submit"><span class="glyphicon glyphicon-upload">
                    </span> UPLOAD</button>
            </form>
        </div>



<!-- Script -->
<script>

</script>
</body>
</html>
