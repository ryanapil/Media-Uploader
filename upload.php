<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Media Uploader</title>
    </head>
    <body>
        <pre><?php
            foreach ($_FILES["images"]["error"] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $temp = $_FILES["images"]["tmp_name"][$key];
                    $name = basename($_FILES["images"]["name"][$key]);
                    move_uploaded_file($temp, "images/$name");
                    echo "Uploaded $name\n";
                }
            }
        ?></pre>
        <a href="index.php"><button type="button">Return</button></a>
    </body>
</html>
