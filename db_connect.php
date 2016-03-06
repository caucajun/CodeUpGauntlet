<?php
  $link = mysql_connect('localhost', 'chris', 'Caillouet', 'redditapp');
  if (!$link) {
    die('Could not connect: ' . mysql_error());
  }
  echo 'Connected successfully to the ShittyReddit Database!  Impressive.  Most impressive.';
  mysql_close($link);
?>