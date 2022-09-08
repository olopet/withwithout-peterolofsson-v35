<?php

$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

        if($check !== false) {

            echo "Filen är en bild enligt MIME-standard - " . $check["mime"] . ". <br>";
            $uploadOk = 1;

            } 

            else {
            echo "Filen följer inte MIME-standard och kan därför inte laddas upp. <br>";
            $uploadOk = 0;

        }
        
 
  
        if ($_FILES["fileToUpload"]["size"] > 700000 && $uploadOk == 1) {

            echo "Filen är för stor (max 700 kb). <br>";
            $uploadOk = 0;

        }

        nl2br("\n");
     
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $uploadOk == 1)  {

            echo "Enbart bilder med filfromat JPG, JPEG, PNG är tillåtna. <br>";
            $uploadOk = 0; 

        }
        
        if ($uploadOk == 1 && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {
                echo "Filen ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " har laddats upp. Tack så mycket! <br>";
                } else {
                echo "Error! Det gick inte att ladda upp filen. <br>";
            }

        
    }
                

    
?>