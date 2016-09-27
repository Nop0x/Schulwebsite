<?php
/**
 * Created by PhpStorm.
 * User: btrautmann
 * Date: 23.09.2016
 * Time: 13:15
 */

function update_user($conn, $currentid)
{
    header("Content-Type: text/html;charset=UTF-8");
    $sql = "UPDATE users SET plz = '59581', ort = 'Warstein' WHERE id = 5;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<div class=\"col-sm-6 col-md-4\">";
            echo "<div class=\"thumbnail\">";
            echo "<div class=\"caption\">";
            echo "<h3>" . $row["header"] . "</h3>";
            echo "<p>" . $row["content"] . "</p>";
            echo "<p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Read more</a>";
            echo "<hr>";
            echo "<p> News vom " . date('d.m.Y', strtotime($row["timestamp"]));
            echo "</div></div></div>";
        }
    }
}
function get_news_content($conn)
{
    header("Content-Type: text/html;charset=UTF-8");
    $sql = "SELECT id, header, content, timestamp FROM news";
}
function get_news_image($conn)
{

}