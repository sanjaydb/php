
<?php

function ReadFile($filename)
{
  
      //  $filename = "tmp.txt";
        $file = fopen( $filename, "r" );
        
        if( $file == false ) {
           echo ( "Error in opening file" );
           exit();
        }
        
        $filesize = filesize( $filename );
        $filetext = fread( $file, $filesize );
        fclose( $file );
        
        echo ( "File size : $filesize bytes" );
        echo ( "<pre>$filetext</pre>" );
}



function WriteFile($filename)
{

 //$filename = "/home/user/guest/newfile.txt";
  $file = fopen( $filename, "w" );
  
  if( $file == false ) {
     echo ( "Error:01" );
     exit();
  }
  fwrite( $file, "Hack the hacker 21 !\n" );
  fclose( $file );

}

?>
