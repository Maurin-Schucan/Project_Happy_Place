<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formular mit der GET-Methode versenden</h1>

    <form action="formular.php" method="get">
        <table>
            <tr>
                <td>
                    <label for="vorname">
                        Vorname:
                        <input type="text" name="vorname" id="vorname" autofocus>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nachname">
                        Nachname:
                        <input type="text" name="nachname" id="nachname">
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="wohnort">
                        Wohnort:
                        <input type="text" name="wohnort" id="wohnort">
                    </label>
                </td>
            </tr>
        </table>
        <button type="submit">Daten absenden</button><button type="reset">Zurücksetzen</button>
    </form>
    <?php

        $vorname = $_GET['vorname'];
        $nachname = $_GET['nachname'];
        $wohnort = $_GET['wohnort'];

        echo '<p>'. $vorname .'<br>'. $nachname .'<br>'. $wohnort .'</p>';

    ?>
</body>
</html>