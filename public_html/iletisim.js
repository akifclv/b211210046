
        function kontrol() {
          var cevap;
          var isim=  document.forms["kontrol"]["firstname"].value;
          var soyisim=  document.forms["kontrol"]["lastname"].value;
          var email=document.forms["kontrol"]["email"].value;
          var cinsiyet=document.forms["kontrol"]["cinsiyet"].value;
          
            if(isim==""){
               
                alert("ism boş bırakılamaz");
                return false;
                
            }
            else if(soyisim==""){
              alert("soyisim boş bırakılamaz");
              return false;
            }
            else if(email==""){
              alert("email boş bırakılamaz");
              return false;
            }
            else if(cinsiyet==false){
              alert("Lütfen cinsiyet alanını doldurunuz")
              return false;
            }
            
        }
        function openNav() {
         document.getElementById("myNav").style.width = "100%";
           }
                
        function closeNav() {
          document.getElementById("myNav").style.width = "0%";
          }
