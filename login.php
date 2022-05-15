<?php



if(($_POST['email1']=="b211210046@sakarya.edu.tr")&&($_POST['sifre1']=="b211210046")){
    header("location:bekleme.php");
}
else{

    header("location:login.html");
}

?>