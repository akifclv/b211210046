<?php



if(($_POST["email"]=="b211210046@sakarya.edu.tr")&&($_POST["sifre"]=="b211210046")){
    header("location:http://localhost/public_html/bekleme.php");
}
else{

    header("location:http://localhost/public_html/login.html");
}

?>