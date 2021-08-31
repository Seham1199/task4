<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Page</title>
</head>
<body>

 <div class="container">
   <div class="w-75 m-5 p-5 border ">
            
         <form method="POST" action="handle_upload_page.php" enctype="multipart/form-data"> 
            <label for="imgName">Name of Image</label>
            <input class="form-control" type="text" id="imgName" name="imgName"> 
            <input class=" my-4" type="file" id="fileName" name="fileName">
            <br>
            
            <input type="submit" value="upload" name="submit">
         </form>
                                   
   </div>
</div>

</body>

</html>

