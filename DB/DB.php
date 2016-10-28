<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Daten erfassen</title>
    </head>
    <body>

        <h2> Bitte geben Sie Ihre Daten ein </h2>
        <form action="tabelleneintrag.php" method="post">
            <table>
                <tr>
                    <td>Vorname</td>
                    <td> <input type="text" name="vorname" size="30"> </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td> <input type="text" name="name" size="30"> </td>
                </tr>
                <tr>
                    <td>Gehalt</td>
                    <td> <input type="text" name="gehalt" size="30"> </td>
                </tr>
                <tr>
                    <td>Strasse</td>
                    <td> <input type="text" name="strasse" size="30"> </td>
                </tr>
                <tr>
                    <td>PLZ</td>
                    <td> <input type="text" name="plz" size="30"> </td>
                </tr>

                <tr>
                    <td>Ort</td>
                    <td> <input type="text" name="ort" size="30"> </td>
                </tr>

            </table>
            <input type="submit" value="eintragen"/>
            <input type="reset" value="nochmals"/>
        </form>
<a href="DB/"> DB </a> <br/>


        <?php
        ?>
    </body>
</html>
