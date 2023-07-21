<?php 

echo '<pre>';
print_r($_FILES);
echo '</pre>';

$error = '';

if(isset($_FILES['upload'])){
    $fileName = $_FILES['upload']['name'];
    $tmpName = $_FILES['upload']['tmp_name'];
    $fileSize = $_FILES['upload']['size'];
    
    $allowedExt = ['jpg','jpeg','png'];
    $fileExt = pathinfo($fileName,PATHINFO_EXTENSION);
    $fileExt = strtolower($fileExt);
    
    if(!in_array($fileExt,$allowedExt)){
        $error = 'only images allowed';
    }elseif($fileSize > 2097152){
        $error = 'file size can not exceed 2MB';
    }else{
        move_uploaded_file($tmpName,'uploads/'.$fileName);   
    }
}

?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="upload">
    <input type="submit" name="submit">
</form>
<b style="color:red"><?= $error ?></b>