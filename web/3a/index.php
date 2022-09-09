<!DOCTYPE html>
<html>
<body>
<p class="text-black text-36 font-bold">ASSIGNMENT 3A</p><br><br>

<?php 

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
     
$url_components = parse_url($url);
 
parse_str($url_components["query"], $params);
     
echo "Hej " . $params["name"];

echo nl2br("\n");

echo 'Hej ' . htmlspecialchars($_GET["name"]);

echo nl2br("\n");

echo 'Hej ' . htmlspecialchars($_SERVER["QUERY_STRING"]);

?>

</body>
</html>