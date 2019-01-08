<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mooiegebouwen - invoer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
 
    <form action="index.php" method="post">
        <br>
        
        Welk gebouw wil je toevoegen? 
        <input type="text" name="Naam" > 
        <br>
        In welke plaats staat het: 
        <input type="text" name="Plaats" >
        <br>
        Welk cijfer geef je het gebouw: 
        <input type="number" name="Cijfer" >
        <br>
        <input id=submit type="submit" name="submit" value="Voeg toe">
    </form>


</body>
</html>