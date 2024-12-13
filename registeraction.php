<?php
include("header.html");
?>

<?php
if(isset($_POST["username"]) && !empty($_POST["username"])
 && isset($_POST["email"])  && !empty($_POST["email"])
 && isset($_POST["passw"])  && !empty($_POST["passw"])
 && isset($_POST["repassw"])  && !empty($_POST["repassw"]))
{
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["passw"];
    $repassword=$_POST["repassw"];
    echo("نام");
    echo("<p>".$username."</p>");
    echo("ایمیل");
    echo("<p>".$email."</p>");
    echo("رمز");
    echo("<p >".$password."</p>");
    echo("رمز");
    echo("<p>".$repassword."</p>");
}

?>

<?php
include("footer.html");
?>