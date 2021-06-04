<?php
$grades = [
    'Albert' => [12, 8, 9, 7, 13],
    'Michel' => [14, 13, 12, 11, 10],
    'Vincent' => [17, 16, 15, 18, 13],
];

function displayAverageByGrades($array) {
    $average = 0;
    foreach ($array as $grade) {
        $average += $grade;
    }
    echo '' . ($average / sizeof($array));
}


?>

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
                Nom
            </th>
            <th>
                Moyenne
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($grades as $name => $grade) {
                echo '<tr>';
                    echo '<td>';
                    echo $name;
                    echo '</td>';
                    echo '<td>';
                        displayAverageByGrades($grade);
                    echo '</td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>
</body>
</html>

