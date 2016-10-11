<?php
/**
 * Created by PhpStorm.
 * User: btrautmann
 * Date: 23.09.2016
 * Time: 11:12
 */

function get_users($conn, $currentuser)
{
    header("Content-Type: text/html;charset=UTF-8");
    $sql = "SELECT id, username, email, password FROM users WHERE username = '$currentuser'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            echo "<form class=\"form-horizontal\">
                    <fieldset>
    
                    <!-- Text input-->
                    <div class=\"form-group\">
                      <label class=\"col-md-2 control-label\" for=\"textinput\">Benutzername *</label>  
                      <div class=\"col-md-4\">
                      <input id=\"textinput\" name=\"textinput\" type=\"text\" value=". $row["username"] ." class=\"form-control input-md\" required=\"\"> 
                      </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class=\"form-group\">
                      <label class=\"col-md-2 control-label\" for=\"textinput\">Email Adresse *</label>  
                      <div class=\"col-md-4\">
                      <input id=\"textinput\" name=\"textinput\" type=\"text\" value=". $row["email"] ." class=\"form-control input-md\" required=\"\">
                      </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class=\"form-group\">
                      <label class=\"col-md-2 control-label\" for=\"textinput\">Passwort *</label>  
                      <div class=\"col-md-4\">
                      <input id=\"textinput\" name=\"textinput\" type=\"text\" value=". $row["password"] ." class=\"form-control input-md\" required=\"\">
                      </div>
                    </div>
                    
                    
                    <!-- Button -->
                    <div class=\"form-group\">
                      <label class=\"col-md-2 control-label\" for=\"singlebutton\"></label>
                      <div class=\"col-md-6\">
                        <button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-default\">Profil aktualisieren</button>
                      </div>
                    </div>
    
                    
                    </fieldset>
                    </form>";
        }
    }
}



function get_users_content_by_username($conn, $currentuser)
{
    header("Content-Type: text/html;charset=UTF-8");
    $sql = "SELECT id, username, email, password FROM users WHERE username = $currentuser";
}