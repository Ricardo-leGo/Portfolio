<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
$productos = json_decode(file_get_contents("files/MOCK_DATA.json"), true);
?>

<div class="container">
<?php
foreach($productos as $producto ){
    echo "<div class='card'>";
    echo "<h3>" .$producto["nombre"]. "</h3>";
    echo "<p>" .$producto["email"]. "</p>";
    echo "</div>";
};?>

</div>
</body>
</html>

