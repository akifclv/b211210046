<?php



if($_POST['email']=="b211210053@sakarya.edu.tr"&& $_POST['şifre']=="b211210053"){
    header("location:http://localhost/public_html/index.html");
    
}
else{
    header("location:http://localhost/public_html/login.html");
}

?>