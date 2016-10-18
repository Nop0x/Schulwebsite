<?php
/**
 * Created by PhpStorm.
 * User: btrautmann
 * Date: 23.09.2016
 * Time: 13:15
 */

function update_user($conn, $currentuser, $newusername)
{
    header("Content-Type: text/html;charset=UTF-8");
    $sql_get = "SELECT id, username, email, password FROM users WHERE username = '$newusername'";
    $result = $conn->query($sql_get);
    if ($result->num_rows > 0) {
        return $used = true;
    } else {
        $sqlupdate = "UPDATE users SET username = '$newusername' WHERE username = '$currentuser'";
        $conn->query($sqlupdate);
        // output data of each row

        setcookie("username", $newusername);
    }
}