<!DOCTYPE html>
<html>
<body>
<p class="text-black text-36 font-bold">ASSIGNMENT 3C</p><br><br>

<?php

    //Lista på 10 frukter jag gillar :9
    $fruits = [
        ['title' => 'Apple'],
        ['title' => 'Banana'],
        ['title' => 'Lime'],
        ['title' => 'Pear'],
        ['title' => 'Orange'],
        ['title' => 'Blueberry'],
        ['title' => 'Mango'],
        ['title' => 'Avocado'],
        ['title' => 'Pineapple'],
        ['title' => 'Strawberry'],
    ];


    if (isset ($_GET['page']) && !empty($_GET['page']))
        {
        // Sidan att visa (kommer via URL parameter)
        $page = intval($_GET['page']);

        } else {

        // Om inga parametrar finsn går den automatiskt till första sidan
        header('location:/3C/index.php?page=1');
        
        }

    // Antalet objekt från array som ska vias
    $pageSize = 2;

    // Räknar antalet objekt i array $Fruits och kalkylerar antalet sidor (avrundat uppåt med Ceil)
    $totalRecords = count($fruits);
    $totalPages   = ceil($totalRecords / $pageSize);

    // Validering att inkommen $_GET 'page' inte får vara större än antalet nummer totala sidor.
    if ($page > $totalPages) {
        $page = $totalPages;
    }

    // Validering att $_GET 'page' inte kan vara mindre än ett.
    if ($page < 1) {
        $page = 1;
    }

     // Kalkylerar positionen för den första datapunkten i arrayen som sidan ska visa
    $offset = ($page - 1) * $pageSize;
    //echo $offset;

    // Hämtar de objekt som ska visas från array $Fruits
    $fruits = array_slice($fruits, $offset, $pageSize);

    //Printar ut två values med hjälp av Key 'title' från array $Fruits med hjälp av foreach.
    foreach ($fruits as $fruit) { 

        echo $fruit['title'] . " "; 

         } 

    // Variabler för paginerings länkar.
    $pageFirst = $page > 1 ? 1 : '';
    $pagePrev  = $page > 1 ? $page-1 : '';
    $pageNext  = $page < $totalPages ? $page + 1 : '';
    $pageLast  = $page < $totalPages ? $totalPages : '';

    ?>

    <br><br>
    <a href="index.php?page=<?php echo $pageFirst; ?>">« First</a>
    <a href="index.php?page=<?php echo $pagePrev; ?>">Prev</a>
    <a href="index.php?page=<?php echo $pageNext; ?>">Next</a>
    <a href="index.php?page=<?php echo $pageLast; ?>">Last »</a>

</body>
</html>

