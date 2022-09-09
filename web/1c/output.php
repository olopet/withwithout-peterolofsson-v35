<html>
<body>

<?php
//variables
$name = $email = $phone = "";
$nameError = $emailError = $phoneError = "";
$date = new DateTime();
$date = $date->format("Y-m-d, h:i:s ");

     
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $valid = true;

                if(empty($_POST["name"])){
                    $valid=false;
                    $nameError = "Error! Namn saknas";
                }
                

                if(empty($_POST["email"])){
                    $valid=false;
                    $emailError = "Error! E-mail saknas";
                }

                if(empty($_POST["phone"])){
                    $valid=false;
                    $phoneError = "Error! Telefonnummer saknas";
                }

                if($valid)
                {
                  

                    function test_input($data) 
                    {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    } 

                    $name = test_input($_POST["name"]);
                    $email = test_input($_POST["email"]);
                    $phone = test_input($_POST["phone"]);
               
                    extract($_REQUEST);
                    $file=fopen("form-save.txt","a");

                    fwrite($file,"Skapad: ");
                    fwrite($file, $date ."\n");
                    fwrite($file,"name :");
                    fwrite($file, $name ."\n");
                    fwrite($file,"email :");
                    fwrite($file, $email ."\n");
                    fwrite($file,"phone :");
                    fwrite($file, $phone ."\n");
                    fwrite($file, "\n");
                    fclose($file); 

                }

            }
    ?>

Ditt namn är: <?php echo $_POST["name"]; ?> <?PHP echo $nameError;?> <br><br>
Din email är: <?php echo $_POST["email"]; ?><br><br> <?PHP echo $emailError; ?> 
Ditt telefonnummer är: <?php echo $_POST["phone"]; ?> <?PHP echo $phoneError; ?><br><br>
Se validerad input: <a href="log.php">Log-file</a>

</body>
</html>