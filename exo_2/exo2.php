<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exos jour 2</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < 10; $i++) {
                    echo '<tr>';
                        echo '<td>';
                        echo $i;
                        echo '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
