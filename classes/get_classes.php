<?php
require "../php/db.php";
$conn = connect();
$sql = "SELECT * FROM classes";
$result = $conn->query($sql);
$return = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $temp = array
        (
            "fach" => $row["topic"],
            "lehrer" => $row["teacher"],
            "raum" => $row["room"],
            "delay" => $row["delay"]
        );
        array_push($return, $temp);
    }
}
print_r(json_encode($return));



