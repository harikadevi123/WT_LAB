<!DOCTYPE html>
<html>
<head>
    <title>File Manager</title>
</head>
<body>

<h2>Upload File / Image</h2>

<!-- Upload Form -->
<form action="upload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="file" required>

    <br><br>

    <button type="submit">Upload</button>

</form>

<hr>

<h3>Uploaded Files</h3>

<?php

$folder = "uploads/";

if(!is_dir($folder)){
    echo "Uploads folder not found!";
    exit();
}

$files = scandir($folder);

foreach($files as $file){

    if($file != "." && $file != ".."){

        $path = $folder . $file;

        echo $file;

        echo " | Size: " . filesize($path) . " bytes";

        echo " | Modified: " . date("d-m-Y H:i", filemtime($path));

        echo " | <a href='download.php?file=$file'>Download</a>";

        echo " | <a href='delete.php?file=$file'>Delete</a>";

        echo "<br>";

    }
}
?>

</body>
</html>
