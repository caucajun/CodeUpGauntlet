<?php
  // This file displays the date for inclusion on pages
?>



<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
  <body>
  	<?php
  	  date_default_timezone_set('America/Chicago');
  	  <br>
      echo "Today is " . date("Y.m.d") . ;
      </br>
    ?>
  </body>
</html>