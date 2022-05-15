<?php
    $isim=$_POST['firstname'];
    $soyisim=$_POST['lastname'];
        $cinsiyet=$_POST["cinsiyet"];
    
    
    $Spor=$_POST['spor'];
    $Sehir=$_POST['sehir'];
    $bilgi=$_POST['bilgi'];
    $Email=$_POST['email'];
    $Dogum=$_POST['dogum'];
    echo "İsim:".$isim."<br>";
    echo "Soyisim:".$soyisim."<br>" ;
    echo "Cinsiyet:".$cinsiyet."<br>";      
    echo "Sehir:". $Sehir ."<br>";
    echo "E-mail:".$Email." <br>";
    echo "Seçtiği spor: ";
    foreach ($Spor as $key => $value) 
     {
        echo $value ;
     };
  
    echo "<br> Text Area: ".$bilgi." <br>";
    echo "Dogum Tarihi: ".$Dogum." <br>";
   
?>