<!DOCTYPE html>
<html>



<body>
    <?php

        if(isset($_GET["color"]) && !empty($_GET["color"]))
        {
            $color = htmlspecialchars($_GET["color"]);;
        }    
        else
        {
            $color = "white";
        }
    ?>

    <p class="text-black text-36 font-bold">ASSIGNMENT 3B</p><br><br>



    <body style="background-color: <?php echo $color; ?>">

    <form method="get" name="formColor" id="formColor">
            <input type="color" name="color" size="40"><br><br>
            <input type="submit" value="submit">
        </form>

        <br><br>

        <p>Or use ?color="nameofcolor" in url to change background-color</p>

    </body>
 
</body>
</html>