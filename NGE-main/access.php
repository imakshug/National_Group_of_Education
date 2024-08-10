
<?php
include("config.php");
extract($_POST);
$query = "INSERT INTO `neg-contactus` (`name` , `email` , `phone` , `courses`) VALUES ('" . $name. "' ,' " . $email. "' ,' " . $phone. "' , '" . $courses. "' )";
$result = $mysqli->query($query);
if (!$result) {
    echo "Something went Wrong" . $mysqli->error;
}

echo "Thanks you for submittijlly your Query";
$mysqli->close();
?>