<?php
    $zielOrdner = "uploads/";
    $upload = $zielOrdner . basename($_FILES["uploadFile"]["name"]);

    if (isset($_POST["submit"])){
        //prüfen der datei-art
        $fileType = strtolower(pathinfo($upload,PATHINFO_EXTENSION));
        if ($fileType = "jpg" && $fileType = "png" && $fileType = "gif" && $fileType = "jpeg") {
            if (move_uploaded_file($_FILES["uploadFile"]["name"],$upload)){
                echo "Erfolgreich hochgeladen!";
            } else{
                echo " Fehlgeschlagen...";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload form</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="uploadFile">
        <input type="submit" value="Hochladen" name="upload">
    </form>
</body>
</html>