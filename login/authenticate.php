<?php   
    $is_invalid = false; 

    // require_once(__DIR__. '/../database/config.php');  
    $database = new Database(); 

    if($_SERVER["REQUEST_METHOD"] === "POST")
    { 
        $mysqli = $database->GetConnection();
        $checkifExist = sprintf("SELECT * FROM admin_acc WHERE email = '%s'",
                                $mysqli->real_escape_string($_POST["email"]));

      $result = $mysqli->query($checkifExist);
      $userInfo =  $result->fetch_assoc();  

      if($userInfo)  
      { 
          if(password_verify($_POST["password"], $userInfo["password"]))
          { 
              session_start(); 
              session_regenerate_id();  
              $_SESSION["fullname"] = $userInfo["name"];
              header("Location: ../dashboard"); 
              exit;
          }
      }
      $is_invalid = true;  
    }
?>