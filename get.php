<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="naam" placeholder="Naam"> <br>
        <input type="text" name="achterNaam" placeholder="Achternaam"> <br>
        <input type="number" name="leeftijd" placeholder="Leeftijd"> <br>
        <input type="text" name="address" placeholder="address"> <br> <br>
        <input type="submit" name="knop1">
    </form>
    <?php 

    if(isset($_GET["knop1"])) {
        echo $_GET["naam"] . "<br>";
        echo $_GET["achterNaam"] . "<br>";;
        echo $_GET["leeftijd"] . "<br>";;
        echo $_GET["address"] . "<br>";;
    }

    ?>
</body>
</html>