
        function kontrol()
         {
          var isim=  document.forms["myform"]["firstname"].value;
          var soyisim=  document.forms["myform"]["lastname"].value;
          var email=document.forms["myform"]["email"].value;
          var tarih=document.forms["myform"]["dogum"].value;
          var nameler=[isim,soyisim,email,tarih];
          var idler=["dfname","dlname","dmail","dtarih"];
          for(var i=0; i<idler.length; i++)
          {
           
              document.getElementById(idler[i]).innerHTML="";

          }
          for(var i=0; i<idler.length; i++)
          {
            if(nameler[i]=="")
            {
              document.getElementById(idler[i]).style.color="red";
              document.getElementById(idler[i]).innerHTML="Boş Geçilemez";
              
            }
          }
          for(var i=0; i<nameler.length; i++)
          {
       
              if(nameler[i]=="")
              {
                return false;
              } 
       
          }
          
          
           
        }
        function sıfırla()
        {
          var idler=["dfname","dlname","dmail","dtarih"];
          for(var i=0; i<idler.length; i++)
          {
           
              document.getElementById(idler[i]).innerHTML="";

          }
        }
        function openNav() {
         document.getElementById("myNav").style.width = "100%";
           }
                
        function closeNav() {
          document.getElementById("myNav").style.width = "0%";
          }
