<!DOCTYPE html>
<html>
<body>
<h1>Select an image to upload : </h1><br>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

    <input type="file" name="fileToUpload" id="fileID"> <br><br><br>
    <input type="submit" value="Upload Image" name="submit"> <br>
</form>
<hr>
<?php
if (isset($_FILES['fileToUpload'])) {
    $imageFile = $_FILES['fileToUpload'];
         $allowedTypes = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
        $detectedType = exif_imagetype($imageFile['tmp_name']);
        $validImageType = in_array($detectedType, $allowedTypes);
        if (!$validImageType) {
            echo "Invalid Type of image. Please upload (GIF, JPEG, PNG)";
        } else {
            move_uploaded_file($imageFile['tmp_name'], "pictures/$imageFile[name]");
            echo "<img src='pictures/$imageFile[name]' />";
        }
        $directory = "pictures/";
        $allPictures = scandir($directory);

        for ($position = 2;$position<count($allPictures);$position++){
            echo "<img src='pictures/$allPictures[$position]'>";
        }
}
?>


</body>
</html>