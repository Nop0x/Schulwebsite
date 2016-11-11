<?php
/**
 * Created by PhpStorm.
 * User: btrautmann
 * Date: 23.09.2016
 * Time: 11:12
 */
include "../php/update_user.php";

function get_users($conn, $currentuser, $post)
{
    $changed = false;
    if($post)
    {
        if(isset($post['refresh_profile']))
        {
            update_user($conn,$currentuser,$post['benutzername']);
            $changed = true;
        }
    }
    header("Content-Type: text/html;charset=UTF-8");
    $sql = "SELECT id, username, email, password FROM users WHERE username = '$currentuser'";
    if($post)
    {
        if(isset($post['refresh_profile']))
        {
            $currentuser = $post['benutzername'];
            $sql = "SELECT id, username, email, password FROM users WHERE username = '$currentuser'";
        }

    }
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo ("<fieldset>
    
                    <!-- Benutzername -->
                    <div class=\"form-group\">
                      <label class=\"col-md-2 control-label\" for=\"textinput\">Benutzername *</label>
                      <div class=\"col-md-4\">
                      <input id=\"benutzername\" name=\"benutzername\" type=\"text\" value=\"" . $row['username'] . "\" class=\"form-control input-md\" required=\"\">
                      </div>
                      <div id= \"response_name\" class=\"col-md-6\">
                        
                      </div>
                    </div>
                    
                    <!-- Email-Adresse-->
                    <div class=\"form-group\">
                      <label class=\"col-md-2 control-label\" for=\"textinput\">Email Adresse *</label>
                      <div class=\"col-md-4\">
                      <input id=\"email\" name=\"email\" type=\"text\" value=\" ". $row["email"]. " \" class=\"form-control input-md\" required=\"\" disabled>
                      </div>
                    </div>
                    
                    <!-- Passwort ändern -->
                    <div class=\"form-group\">
                      <label class=\"col-md-2 control-label\" for=\"singlebutton\"></label>
                      <div class=\"col-md-6\">
                      <div id=\"response\">
                      </div>
                        <input type='submit' value='Profil aktualisieren' 
                        name=\"refresh_profile\" class=\"btn btn-default\" />
                      </div>
                    </div>
                        
                    </fieldset>
                  </form>
                  </div>");
            if($changed)
            {
                return "userupdate";
            }
        }
    }
}