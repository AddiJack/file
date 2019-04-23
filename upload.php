<?php
if (isset($_POST['submit'])){
    if (count($_FILES['fichier']['name'])>0){
        for($i=0; $i<count($_FILES['fichier']['name']); $i++) {
    $fileTmpName = $_FILES['fichier']['tmp_name'][$i];
            
            $filename = $_FILES['fichier']['name'][$i];
            $fileType = $_FILES['fichier']['type'][$i];
            $fileSize = $_FILES['fichier']['size'][$i];
            $fileError = $_FILES['fichier']['error'][$i];
            $fileExt = explode('.', $filename);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','png','gif');
    if (in_array($fileActualExt, $allowed)){
        
        if ($fileError === 0){
            if($fileSize <= 1000000){
                $fileNameNew = uniqid('image', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
    move_uploaded_file($fileTmpName, $fileDestination);
    header('Location: index.php');
            } else {
                echo "Fichier trop volumineux.";
            }
        }else{
            "Il y a une erreur de téléchargement.";
        }
    } else {
        echo "Le type de fichier n'est pas bon.";
    }
}
    }
}
