setcookie(name, value, expire, path, domain, security);

<?php

function SetCookie($name,$data)
{
  setcookie($name, $data, time()+3600, "/","", 0);
}

funtion AccessCookie()
{
        // $name = $_COOKIE["name"]. "<br />";
         $name= $HTTP_COOKIE_VARS["name"]. "<br />";
         return $name;
}

function isCookie($name)
{
         if( isset($_COOKIE[$name]))
            echo "Welcome " . $_COOKIE["name"] . "<br />";
            $boolean = True ;
         else
            echo "Sorry... Not recognized" . "<br />";
            $boolean = Fasle;
    
    return $boolean;
 }   
  
  
  function deleteCookie($name)
  {
    // Loop
     setcookie( $name, "", time()- 60, "/","", 0);
  }
    
?>
