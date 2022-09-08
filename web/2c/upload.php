<?php

$targetDir = "uploads/";

$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);

$name = basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
  
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
     
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $uploadOk == 1)  {

            echo "Enbart bilder med filfromat JPG, JPEG, PNG är tillåtna. <br>";
            $uploadOk = 0; 

        }
        
        if ($uploadOk == 1)
        {
            $yearFolder = $targetDir . date("Y");
            $monthFolder = $yearFolder . '/' . date("m");
            $path = $monthFolder . '/' . $name;


            !file_exists($yearFolder) && mkdir($yearFolder , 0777);
            !file_exists($monthFolder) && mkdir($monthFolder, 0777);

           
            if (file_exists($path)) 
            {
                echo "En fil med samma namn existerar redan: $path. Döper om filen. <br>";
                $i = 1;
                $newPath = $path;

                    while(file_exists($newPath))
                    {          
                        $newPath = (string) $monthFolder . '/' . pathinfo($path, PATHINFO_FILENAME) . "(" . $i . ")" . "." . pathinfo($path, PATHINFO_EXTENSION);
                        $i++;
                    }

           
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newPath);
                echo "Filen ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " har laddats upp. Tack så mycket! <br>";               
            }

            else 
            {
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $path);
                echo "Filen ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " har laddats upp. Tack så mycket! <br>";
            }
               
        }

        
    }
                

    
?>