<?php
  include "Computer.php";
  include "MacBook.php";

  $dell = new Computer("Dell", "XPS", "i5", "4GB", "500GB HDD");
  $mac = new MacBook("Pro", "i7", "16GB", "1TB SSD");

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assignment3.css">
  <title>Assignment 3</title>
    <article>
      Initially I had a <?php echo $dell; ?>.<br>
      It was nice but I needed more RAM to do work,
      so I upgraded from <?php echo $dell->getRam(); ?> to <?php $dell->setRam("8GB"); echo $dell->getRam(); ?>.<br>
      After a while I took a job and they gave me a <?php echo $mac; ?>. It's neat.
    </article>
  <link rel="stylesheet" href="assignment3.css">
</head>
<body>

</body>
</html>