<?php
  $link = mysql_connect('localhost', 'chris', 'Caillouet', 'redditapp');
  if (!$link) {
    die('Could not connect: ' . mysql_error());
  }
  echo 'Connected successfully';
  mysql_close($link);
?>