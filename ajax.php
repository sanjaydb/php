<html>
   <body>
      <script language = "javascript" type = "text/javascript">
            function ajaxFunction()
            {
               var ajaxRequest;  // The variable that makes Ajax possible!
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }

               // Ajax Function
               ajaxRequest.onreadystatechange = function()
               {
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('displayhere');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               // get data
               var p1 = document.getElementById('p1').value;
               var p2 = document.getElementById('p2').value;
               var p3 = document.getElementById('p3').value;
               
               queryString +=  "&p1=" + p1 + "&p2=" + p2 + "&p3=" + p3;
               ajaxRequest.open("POST", "server.php" + queryString, true);
               ajaxRequest.send(null);
            }
         //-->
      </script>

      <form name = 'myForm'>
         p1: <input type = 'text' id = 'p1' /> <br />
         p2: <input type = 'text' id = 'p2' />
         p3: <input type = 'text' id = 'p3' />
         <br />
         <input type = 'button' onclick = 'ajaxFunction()' value = 'Submit'/>
      </form>

      <div id = 'displayhere'> </div>
   </body>
</html>
