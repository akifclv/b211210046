<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(strtolower($_POST["email1"])=="b211210046@sakarya.edu.tr"&&strtolower($_POST["sifre1"])=="b211210046")
    {
        echo "<h1>HOŞGELDİNİZ B211210046</h1>";
        header("Refresh: 2; url=hakkinda.html");
    }
    else
    {
        echo "<script>alert('mail yada şifre yanlış lütfen tekrar deneyiniz')</script>";
        header("Refresh:2; url=index.html");
        $
    }
}


?>
<style type="text/css">
h1{text-align:center;}
</style>