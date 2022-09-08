<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WithWithout</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gray: '#333',
                        green: '#008d64'
                    },
                    fontSize: {
                        '96': '6rem'
                    }
                }
            }
            }
        </script>
    </head>
    <style>
        .center {
        text-align: center;
        }
        
        a:link {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        a:hover {
            color: #008d64;
        }

        a:visited
        {
            color: #008d64;
        }
     

    </style>
    <body class="antialiased bg-gray">
        <div class="flex items-center justify-center">
            <p class="text-white text-96 font-bold">w<span class="text-green">/</span>w</p>
        </div>

        <div class="center">
            <a href="http://localhost/1a/index.php">1A</a><br>
            <a href="http://localhost/1b/index.php">1B</a><br>
            <a href="http://localhost/1c/index.php">1C</a><br>    
        </div>
        <br><br>
        <div class="center">
            <a href="http://localhost/2a/index.php">2A</a><br>
            <a href="http://localhost/2b/index.php">2B</a><br>
            <a href="http://localhost/2c/index.php">2C</a><br>    
        </div>

    </body>
</html>
