<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="naam" placeholder="Naam"> <br>
        <input type="text" name="achterNaam" placeholder="Achternaam"> <br>
        <input type="number" name="leeftijd" placeholder="Leeftijd"> <br>
        <input type="text" name="address" placeholder="address"> <br> <br>
        <input type="submit" name="knop1">
    </form>
    <?php 

    if(isset($_POST["knop1"])) {
        echo $_POST["naam"] . "<br>";
        echo $_POST["achterNaam"] . "<br>";;
        echo $_POST["leeftijd"] . "<br>";;
        echo $_POST["address"] . "<br>";;
    }

    //verschil tussen GET en POST is dat je bij een get alles in de URL balk kan zien, dat is niet het geval voor POST dus het is veel veiliger.
    ?>
</body>
</html>