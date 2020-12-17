<?php
function getTableContent($fieldsNames, $dbCon, $query)
{
    echo "<table>";
    echo '<tr>';
    foreach ($fieldsNames as $field){
        echo '<th>';
        echo $field;
        echo '</th>';
    }
    echo '</tr>';
    $queryResult = mysqli_query($dbCon, $query)->fetch_all(MYSQLI_ASSOC);
    foreach ($queryResult as $row) {
        echo '</tr>';
        foreach ($row as $column) {
            echo '<td>';
            echo $column;
            echo '</td>';
        }
        echo '<tr/>';
    }
    echo '</table>';
}
