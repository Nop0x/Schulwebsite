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
    
                    <!-- Benutzername -->
                    <div class=\"form-group\">
                      <label class=\"col-md-2 control-label\" for=\"textinput\">Benutzername *</label>  
                      <div class=\"col-md-4\">
                      <input id=\"benutzername\" name=\"benutzername\" type=\"text\" value=" . $row["username"] . " class=\"form-control input-md\" required=\"\"> 
                      </div>
                      <div id= \"response_name\" class=\"col-md-6\">
                        
                      </div>
                    </div>
                    
                    <!-- Email-Adresse-->
                    <div class=\"form-group\">
                      <label class=\"col-md-2 control-label\" for=\"textinput\">Email Adresse *</label>  
                      <div class=\"col-md-4\">
                      <input id=\"email\" name=\"email\" type=\"text\" value=" . $row["email"] . " class=\"form-control input-md\" required=\"\" disabled>
                      </div>
                    </div>
                    
                    <!-- Passwort ändern -->
                    <div class=\"form-group\">
                      <label class=\"col-md-2 control-label\" for=\"singlebutton\"></label>
                      <div class=\"col-md-6\">
                      <div id=\"response\">
                      </div>
                        <button id=\"change_pw\" name=\"singlebutton\" class=\"btn btn-default\" onclick=\"changePw()\">Passwort ändern</button>
                        <button id=\"refresh_profile\" name=\"singlebutton\" class=\"btn btn-default\" onclick=change_profile()>Profil aktualisieren</button>
                      </div>
                    </div>
                        
                    </fieldset>
                  </form>";
        }
    }
}