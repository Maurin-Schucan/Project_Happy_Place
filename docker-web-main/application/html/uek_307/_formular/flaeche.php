<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $laenge = $_GET['laenge'];
        $breite = $_GET['breite'];

        $flaeche = $laenge * $breite;

        if (isset($_GET['senden'])){
            echo '<p>'. $laenge .'<br>'. $breite .'<br>'. $flaeche .'</p>';
        } else {


    ?>
    <h1>Formular mit der GET-Methode versenden</h1>

    <form action="flaeche.php" method="get">
        <table>
            <tr>
                <td>
                    <label for="laenge">
                        Länge:
                        <input type="text" name="laenge" id="laenge" autofocus>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="breite">
                        Breite:
                        <input type="text" name="breite" id="breite">
                    </label>
                </td>
            </tr>
        </table>
        <button type="submit" name="senden">Daten absenden</button><button type="reset">Zurücksetzen</button>
    </form>
    <?php

        }
    ?>
</body>
</html>