<?php

if(isset($_FILES['file'])){

    $fileName = $_FILES['file']['name'];
    $tmpName  = $_FILES['file']['tmp_name'];

    $uploadFolder = "uploads/";

    // Create folder if not exists
    if(!is_dir($uploadFolder)){
        mkdir($uploadFolder);
    }

    $targetFile = $uploadFolder . basename($fileName);

    if(move_uploaded_file($tmpName, $targetFile)){

        echo "File Uploaded Successfully ✅";

    } else {

        echo "Upload Failed ❌";

    }

}else{

    echo "No file selected";

}

echo "<br><br>";
echo "<a href='file_manager.php'>Go Back</a>";
