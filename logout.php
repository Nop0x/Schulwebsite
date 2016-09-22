<?php
if (isset($_COOKIE["username"]))
{
    setcookie("username","",time()-1);
    header("Location: http://localhost/");
    die();
}