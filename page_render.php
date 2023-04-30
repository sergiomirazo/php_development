#This code load an index.html of your web page. Rename this file to index.php for use it
<?php
  $file = 'index.html';
  if (file_exists($file)) {
     header('Location: '.$file);
     exit;
  }
?>
