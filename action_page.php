<?php include("header.php") ?>

<?php

// define variables and set to empty values
$firstname = $lastname = $country = "";
$cookie_name = "user";

// just need to check the method before we store variables.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // these conditionals just prevent errors from popping up.
    // we don't want to use the post variables until there is something 
    // in them
    if(!empty($_POST["firstname"]))
        $firstname = test_input($_POST["firstname"]);
    if(!empty($_POST["firstname"]))
        $lastname = test_input($_POST["lastname"]);
    if(!empty($_POST["firstname"]))
        $country = test_input($_POST["country"]);
    if((!empty($firstname) && !empty($lastname)) && empty($_POST["delete"])){
        $cookie_value = $firstname." ".$lastname;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    }
    if(!empty($_POST["delete"]))
       unset($_COOKIE[$cookie_name]);
    
}
?>

<ul>
    <li>
        <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "THIS IS YOUR FIRST TIME HERE.";
        } else {
            echo $cookie_name." ".$_COOKIE[$cookie_name]." you have been here...";
        }
        ?>
    </li>
</ul>

<ul>
    <li><?php echo "Hi ".$firstname." ".$lastname." from ".$country?></li>
</ul>

<form method="post" action="action_page.php">
    Delete the cookie: <input type="radio" name= "delete">
    <input type="submit">
</form>

<?php
// cleans the inputs.
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<?php include("footer.php") ?>