<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
  $_SESSION["HASHPASS"] = "SANJAY%^67778";

  echo "Session variables are set.";
?>

</body>
</html>
