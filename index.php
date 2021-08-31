<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/index.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index Page</title>
  
</head>
<body>
   

    <!-- <img  src= <?php print_r (scandir("./uploads")); ?>/> -->
 <?php
  $dir = "./uploads";
$images = scandir($dir);
$ignore = Array(".", "..");
foreach($images as $curimg){
    if(!in_array($curimg, $ignore)) {

        echo "<img src='./uploads/$curimg' />";
    }

    
}
 ?>
</body>

