<?php
/**
 * Created by PhpStorm.
 * User: Marvin
 * Date: 23.09.2016
 * Time: 09:04
 * @param $conn A mysqli connection to get news from
 */
function get_news($conn)
{
    header("Content-Type: text/html;charset=UTF-8");
    $sql = "SELECT id, header, content, timestamp FROM news";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<div class=\"col-sm-6 col-md-4\">";
            echo "<div class=\"thumbnail\">";
            echo "<div class=\"caption\">";
            echo "<h3>" . $row["header"] . "</h3>";
            echo "<p>" . $row["content"] . "</p>";
            echo "<form action=\"/news\" method=\"post\">";
            echo "<p><button name=newsid value='". $row["id"]."' class=\"btn btn-primary\">Read more</button></p>";
            echo "</form>";
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