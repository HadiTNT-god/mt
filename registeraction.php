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
    echo("<p>نام</p>");
    echo("<p>".$username."</p>");
    echo("<p>ایمیل</p>");
    echo("<p>".$email."</p>");
    echo("<p>رمز</p>");
    echo("<p >".$password."</p>");
    echo("<p>رمز</p>");
    echo("<p>".$repassword."</p>");
}

?>

<?php
include("footer.html");
?>