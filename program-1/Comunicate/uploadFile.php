<?php
//var_dump($_FILES['fileToUpload']);
//vardump is to check
if (isset($_FILES['fileToUpload'])){
    $imageFile = $_FILES['fileToUpload'];
    // name ,
    // full_path ,
    // type,
    //tmp_name this is the path ,
    //error,
    //size
}
?>
<html>
<body>

<form action="<?php $_SERVER['PHP_SELF']//this is the same as leaving the action blank?>" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileID">
    <input type="submit" value="uploadFile" name="Submit" >
</form>
</body>
</html>