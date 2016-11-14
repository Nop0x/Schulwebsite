<?php
/*
 * Gibt die Klassen für die Klassenübersicht aus!
 */
require "../php/db.php";
$conn = connect();
$sql = "SELECT * FROM classes";
$result = $conn->query($sql);
$return = array();
$html = "<table class=\"table table-bordered\">
        <thead>
        <tr>
            <th>Kurs</th>
            <th>Lehrer</th>
            <th>Raum</th>
            <th>Verspätung</th>
        </tr>
        </thead>
        <tbody id=\"classplan\">
        </tbody>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= "<tr>" .
            "   <td>" . $row["topic"] . "</td>" .
            "   <td>" . $row["teacher"] . "</td>" .
            "   <td>" . $row["room"] . "</td>" .
            "   <td>" . $row["delay"] . "</td>";
    }
}
$html .= "</table>";
echo $html;



