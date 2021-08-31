<?php

if (isset($_POST['submit'])) {
    // echo '<pre>';
    // print_r($_POST);
    // print_r($_FILES);
    // echo '</pre>';
    
$imgName = $_POST['imgName'];
$image = $_FILES['fileName'];


$imageName = $image['name'];

$imageType = $image['type'];
$imageTmpName = $image['tmp_name'];
$imageError = $image['error'];
$imageSize = $image['size'];


$imageNameWithoutExtension = pathinfo($imageName , PATHINFO_FILENAME);
$imageExtension = pathinfo($imageName , PATHINFO_EXTENSION);
$imageNewName =  "$imageNameWithoutExtension-" . uniqid() . " .$imageExtension" ; 
echo $imageNewName ; 
move_uploaded_file($imageTmpName , "uploads/$imageNewName" );
header("location: index.php");


}else {
    header("location: upload_page.php");
}
?>